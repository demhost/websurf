<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;

use Illuminate\Http\Request;
use App\Online;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct(Request $request)
    {   
        $this->middleware('guest', ['except' => 'logout']);
    }


    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            'g-recaptcha-response' => 'required|recaptcha'
        ]);
    }

    protected function authenticated(Request $request, $user)
        {
            //Если пользователь авторизировался
            if(auth()->check()) {

                    
                    //Отправить сообщение пользователям что они используют один IP между собой
                    $onlines = Online::with('user')->where('ip_address', $request->ip())->get()->groupBy('user_id');
                    foreach ($onlines as $online) {
                        if($online->first()->user) {
                                    if(auth()->user()->id != $online->first()->user->id) {
                                        $old_user = $online->first()->user;
                                        $new_user = auth()->user();
                                        Log::info('Ув.пользователь '.$old_user->email.', под ранее использованом вашем ip '.$request->ip().' зашел пользователь '.$new_user->email.', авторизируйтесь на сате заново. Спасибо.');
                                        Log::info('Ув.пользователь '.$new_user->email.', под IP:'.$request->ip().' раньше работал пользователь '.$old_user->email.'');
                                    }
                                
                                }
                            }        
                    

                    //Убираем все активные сессии пользователя и сесси других пользователей с такого IP адреса
                    Online::where('user_id', auth()->user()->id)->orWhere('ip_address', $request->ip())->delete();
            }
        }
}
