<?php

namespace App\Http\Controllers;

use App\Models\Design;
use App\Models\MetaSettings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WebSiteController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }

    public function gen_settings( Request $request){

        // $design = Design::firstWhere('client', env('CLIENT_ID'));
        $setting = MetaSettings::firstWhere('client', env('CLIENT_ID'));

        if($request->hasfile('logo')){
            // Delete file before store
            if(!empty($setting)){
                File::delete(public_path('images/'. $setting->logo));
            }

            $file = $request->file('logo');
            // Generate a file name with extension
            $fileName = 'logo-'.time().'.'.$file->getClientOriginalExtension();

            // Save the file
            $file->storeAs('public/images', $fileName);
            $logo = $fileName;
        }

        if($request->hasfile('favicon')){
            // Delete file before store
            // Storage::delete('public/images/'.$setting->login_image);
            if(!empty($setting)){
                File::delete(public_path('images/'. $setting->login_image));
            }

            $file2 = $request->file('favicon');
            // Generate a file name with extension
            $fileName2 = 'favicon-'.time().'.'.$file2->getClientOriginalExtension();

            // Save the file
            $file2->storeAs('public/images', $fileName2);
            $favicon = $fileName2;
        }

        MetaSettings::updateOrCreate(
            ['id' =>  $setting->id],
            [
                'form' => $request->design,
                'website_name' => $request->web_name,
                'logo' => $logo ?? $setting->logo,
                'favicon' => $favicon ?? $setting->favicon,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
            ]
        );

        return redirect()->back()->with('success','Meta Settings Update successfully!');
    }

    public function designs( Request $request){

        // $design = Design::firstWhere('client', env('CLIENT_ID'));
        $design = Design::firstWhere(['client' =>  env('CLIENT_ID'), 'form' => $request->design]);

        if($request->hasfile('body_bg')){
            // Delete file before store
            if(!empty($design)){
                File::delete(public_path('images/'. $design->body_bg));
            }

            $file = $request->file('body_bg');
            // Generate a file name with extension
            $fileName = 'body_bg-'.time().'.'.$file->getClientOriginalExtension();

            // Save the file
            $file->storeAs('public/images', $fileName);
            $logo = $fileName;
        }

        if($request->hasfile('form_bg')){
            // Delete file before store
            if(!empty($design)){
                File::delete(public_path('images/'. $design->form_bg));
            }

            $file2 = $request->file('form_bg');
            // Generate a file name with extension
            $fileName2 = 'form_bg-'.time().'.'.$file2->getClientOriginalExtension();

            // Save the file
            $file2->storeAs('public/images', $fileName2);
            $favicon = $fileName2;
        }

        Design::updateOrInsert(
            ['client' =>  env('CLIENT_ID'), 'form' => $request->design],
            [
                'body_bg' => $logo ?? $design->logo,
                'form_bg' => $favicon ?? $design->favicon,
                'form_text1' => $request->text1,
                'form_text2' => $request->text2
            ]
        );

        return redirect()->back()->with('success','Design Settings Updated Successfully!');
    }
    
    public function register_successfully(){
        return view('register_successfully');
    }
}
