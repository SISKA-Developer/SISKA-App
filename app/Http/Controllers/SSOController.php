<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class SSOController extends Controller
{
    public function getlogin(Request $request)
    {
        $request->session()->put("state", $state = Str::random(40));
        $query = http_build_query([
            "client_id" => "99139d45-2a13-4230-bf5e-3b2330db7b00",
            "redirect_uri" => "http://siska.stmikbandung.test:81/callback",
            "response_type" => "code",
            "scope" => "",
            "state" => $state
        ]);
        return redirect("http://sso.stmikbandung.test:80/oauth/authorize?" . $query);
    }
    public function getcallback(Request $request)
    {
        $state = $request->session()->pull("state");
        // dd($state);
        // throw_unless(strlen($state) > 0 && $state == $request->$state,
        // InvalidArgumentException::class);

        $response = Http::asForm()->post(
            "http://sso.stmikbandung.test:80/oauth/token",
            [
                "grant_type" => "authorization_code",
                "client_id" => "99139d45-2a13-4230-bf5e-3b2330db7b00",
                "client_secret" => "vEjspImYL4fW2iIjYDCWDWJQBsxmNaKVMysWEJMk ",
                "redirect_uri" => "http://siska.stmikbandung.test:81/callback",
                "code" => $request->code
            ]);
            $request->session()->put($response->json());
            return redirect('/authuser');
    }
    public function getuser(Request $request)
    {
        $access_token = $request->session()->get("access_token"); 
        // $access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5OGU3NWQ4YS1iMWJlLTRiOWItOGQ1OS0zNzdmZGZmOTJhMGMiLCJqdGkiOiI3ODAzMzFmYmY3Y2U2MzllN2Q1Mzc1ODIxNTZlZmViNzQ3ZjUzZDMxNzU4ODFlNDA5OTc1MzUyNzY4ZmExMjM4NGEyZmUxNTI0YzlhNTFkOCIsImlhdCI6MTY4MTE5NjY4MS45NDg3NTksIm5iZiI6MTY4MTE5NjY4MS45NDg3NjUsImV4cCI6MTY4MTI4MzA4MS45MzI3NTgsInN1YiI6IjIiLCJzY29wZXMiOltdfQ.eMgZd2S703mVt-jhqxSCrwplKPINSyCemjkvwJcLEt-34voR0SPX50hvNk1Dy7FuNlqz94dD-e4J4JiuCVCIvvfKIBjaWdARzDr8LzXx0--ijZeFBMryCRHrsKsVB_r1QQMdcSREIh1IyL89gkiSo_R6llUVzEXgLGxq5mW8nwkHhkEeQm4PXygZb5PvRVLvfwwwWu6tApXLsLaXTZsWGGe8eylOygyXoGaR6gLgxjRyNB9yK3Y5HuuFrT7T_oPInPA3eUuSly2PwIlkeA_1l19I7e3u4BcHcBnM8V-BQ0qOGRpj9cscN3eYYIMUZplW137uHxcWjbdcWU4VpZhKgpgIibfySzzhP8DqzI7fqZTTKc2XkSPM9vndfCHQjJQ1vn2XFc6AYN7NVwOqp8IuUVdRtFTNN-SlB9Cfpjtsgq1eWvPL3MK3yfmdEeevcV8LmNnkIr76SULi-Y3GghNbzDfiUIAnmgRtDEugWwF4_fHufn9G6A6h0R4iyp7GGD7iCj5bNowBqSY6nIo-OsMykU2Wi5svX1e2mI6SoLkoi_4J4kmocYJPpCYgVgjp_UrcGiYB1Rjcn-f1mWV8oSeBDTvIdevUPYpMmgH8aZRDii2tqgm3_gVV3xwh-rHIdb81iy3QiBRar-2NwnlT2IwojzthnNzIgOPFHZ020wf9Nc4"; 
        // dd($access_token);
        $response = Http::withHeaders([
            "Accept" => "application/json",
            "Authorization" => "Bearer " . $access_token
        ])->get("http://sso.stmikbandung.test:80/api/user");        
        $userArray = $response->json();
        // dd($userArray); 
            try {
                $email = $userArray['email'];
            } catch (\Throwable $th) {
                return redirect('login')->withErrors("Failed to Login, Try Again!");
            }
        $user = User::where("email", $email)->first();
        if (!$user) {
            $user = new User;
            $user->name = $userArray['name'];
            $user->email = $userArray['email'];
            $user->email_verified_at = $userArray['email_verified_at'];
            $user->nim = $userArray['nim'];
            $user->role = $userArray['role'];
        }    
        Auth::login($user);
        $request->session()->put($response->json());
        $data = $request->session()->all();
        $halaman = $request->session()->get("halaman");
        // dd($data);
        if($halaman == 'kurikulum'){
            $request->session()->forget('halaman');
            return redirect(route('MatakuliahIndex'));
        }
        else if($halaman == 'mahasiswa'){
            $request->session()->forget('halaman');
            return redirect(route('myprofile'));
        }
        else if($halaman == 'evaluasi'){
            $request->session()->forget('halaman');
            return redirect(route('evaluasipembelajaranIndex'));
        }else{
            $halaman1 = $request->session()->get("halaman");
            $halaman = json_encode($halaman1);
            $string = preg_replace('/[^\p{L}\p{N}\s]/u', '', $halaman);
            return redirect('http://siska.stmikbandung.test:81/'.$string);
            // dd($string);
            return $data;
        }
        // return redirect('/');
    }
}
