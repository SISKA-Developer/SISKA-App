<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use GuzzleHttp;
class SSOController extends Controller
{
    public function getlogin(Request $request)
    {
        $request->session()->put("state", $state = Str::random(40));
        // $request->session()->put("code_verifier", $code_verifier = Str::random(128));
        // $codeChallenge = strtr(rtrim(
        //     base64_encode(hash('sha256', $code_verifier, true))
        //     , '='),'+/', '-_');
        $query = http_build_query([
            "client_id" => "99e4918e-bffb-465e-99b4-07d5a68f8a80",
            "redirect_uri" => "http://siska.stmikbandung.test:81/callback",
            "response_type" => "code",
            "scope" => "view-user",
            "state" => $state,
            // "code_challenge" => $codeChallenge,
            // "code_challenge_method" => 'S256',
        ]);
        return redirect("http://sso.stmikbandung.test:80/oauth/authorize?" . $query);
    }
    public function getcallback(Request $request)
    {
        // dd($request);
        $state = $request->session()->pull("state");
        // $code_verifier = $request->session()->pull("code_verifier");
        // dd($state);
        // throw_unless(strlen($state) > 0 && $state == $request->$state,
        // InvalidArgumentException::class);

        //error tidak muncul access token
        // $http = new GuzzleHttp\Client;
        $response = Http::asForm()->post(
            "http://sso.stmikbandung.test:80/oauth/token",
            [
                "grant_type" => "authorization_code",
                "client_id" => "99e4918e-bffb-465e-99b4-07d5a68f8a80",
                "client_secret" => "X1yfZlqDABI0k6PZ1AEExkTF5TsUbdL3zcbrPDdO",
                "redirect_uri" => "http://siska.stmikbandung.test:81/callback",
                // "redirect_uri" => "http://siska.stmik-bandung.ac.id:16082/siska/callback",
                // "code-verifier" => $code_verifier,
                "code" => $request->code
            ]);
            $test = $response->json();
            $request->session()->put($test);

            // $json = json_decode((string) $response->getBody(), true);
            // dd($test);
        // dd($request->session()->all());
            
            // return $json;
            // return $response->json();
            return redirect('/authuser');
    }
    public function getuser(Request $request)
    {
        $access_token = $request->session()->get("access_token"); 
        // $access_token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5OGU3NWQ4YS1iMWJlLTRiOWItOGQ1OS0zNzdmZGZmOTJhMGMiLCJqdGkiOiI3ODAzMzFmYmY3Y2U2MzllN2Q1Mzc1ODIxNTZlZmViNzQ3ZjUzZDMxNzU4ODFlNDA5OTc1MzUyNzY4ZmExMjM4NGEyZmUxNTI0YzlhNTFkOCIsImlhdCI6MTY4MTE5NjY4MS45NDg3NTksIm5iZiI6MTY4MTE5NjY4MS45NDg3NjUsImV4cCI6MTY4MTI4MzA4MS45MzI3NTgsInN1YiI6IjIiLCJzY29wZXMiOltdfQ.eMgZd2S703mVt-jhqxSCrwplKPINSyCemjkvwJcLEt-34voR0SPX50hvNk1Dy7FuNlqz94dD-e4J4JiuCVCIvvfKIBjaWdARzDr8LzXx0--ijZeFBMryCRHrsKsVB_r1QQMdcSREIh1IyL89gkiSo_R6llUVzEXgLGxq5mW8nwkHhkEeQm4PXygZb5PvRVLvfwwwWu6tApXLsLaXTZsWGGe8eylOygyXoGaR6gLgxjRyNB9yK3Y5HuuFrT7T_oPInPA3eUuSly2PwIlkeA_1l19I7e3u4BcHcBnM8V-BQ0qOGRpj9cscN3eYYIMUZplW137uHxcWjbdcWU4VpZhKgpgIibfySzzhP8DqzI7fqZTTKc2XkSPM9vndfCHQjJQ1vn2XFc6AYN7NVwOqp8IuUVdRtFTNN-SlB9Cfpjtsgq1eWvPL3MK3yfmdEeevcV8LmNnkIr76SULi-Y3GghNbzDfiUIAnmgRtDEugWwF4_fHufn9G6A6h0R4iyp7GGD7iCj5bNowBqSY6nIo-OsMykU2Wi5svX1e2mI6SoLkoi_4J4kmocYJPpCYgVgjp_UrcGiYB1Rjcn-f1mWV8oSeBDTvIdevUPYpMmgH8aZRDii2tqgm3_gVV3xwh-rHIdb81iy3QiBRar-2NwnlT2IwojzthnNzIgOPFHZ020wf9Nc4"; 
        $access_token = $request->session()->get("access_token");
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
                // return $response->json();
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
}
            // dd($string);
//             dev :New client created successfully.
//             "client_id" => "99480d52-a18e-4080-a14b-9196644c7373",
// "client_secret" => "NAez3k3bM2uzffEUhY7oDSrd0pg06WktTPucnGS8",
// Personal access client created successfully.
// Client ID: 99e490da-d425-4c96-b842-99a1bd398d4a
// Client secret: 660DVGm1wA2VOjJYE2rW8I5MlRigNKpDQCoNqRvk

// devnew
// Client ID: 99e4918e-bffb-465e-99b4-07d5a68f8a80
// Client secret: X1yfZlqDABI0k6PZ1AEExkTF5TsUbdL3zcbrPDdO
    }
}
