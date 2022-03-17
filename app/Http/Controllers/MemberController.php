<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class MemberController extends Controller
{
    const DEFAULT_LENGTH = 40;

    // TODO: Use PASSWORD_ARGON2I instead when PHP 7.2 will be supported
    const PWD_ALGORITHM = PASSWORD_BCRYPT;
    const PWD_WORK_FACTOR = 12;

    const SHA512_ALGORITHM = 'sha512';
    const WHIRLPOOL_ALGORITHM = 'whirlpool';

    /** @var array */
    private static $aPwdOptions = ['cost' => self::PWD_WORK_FACTOR];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255', 'unique:mysql2.ph7_members'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:mysql2.ph7_members'],
            'sex' => ['required'],
            'password' => ['required', Password::defaults()],
        ]);

        if(empty($request->matchSex)){
            if($request->sex = 'male'){
                $request->matchSex = 'female';
            }else{
                $request->matchSex = 'male';
            }
        }

        $sPassword = $request->password;
        $password = $this->hashPwd($sPassword);
        $current_date = Carbon::now();

        // $member = DB::connection('mysql2')->insert("INSERT INTO ph7_members (firstname, username, email, password) VALUES ('$firstName', '$username', '$email', '$password')");

        $memberId = DB::connection('mysql2')->table('ph7_members')->insertGetId([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $password,
            'firstName' => $request->firstName,
            'birthDate' => $request->birthDate,
            'sex' => $request->sex ?? 'male',
            'matchSex' => $request->matchSex ?? 'female',
            'reference' => env('CLIENT_ID'),
            'ip' => $request->ip(),
            'hashValidation' => Hash::make($sPassword),
            'joinDate' => $current_date,
            'active' => 1,
            'groupId' => 2,
            'affiliatedId' => 0
        ]);

        DB::connection('mysql2')->table('ph7_members_info')->insert([
            'profileId' => $memberId,
            'country' => (!empty($request->country) ? $request->country : ''),
            'city' => (!empty($request->city) ? $request->city : ''),
            'state' => '',
            'zipCode' => (!empty($request->zipCode) ? $request->zipCode : ''),
            'description' => (!empty($request->description) ? $request->description : ''),
            'punchline' => ''
        ]);

        DB::connection('mysql2')->table('ph7_members_privacy')->insert([
            'profileId' => $memberId,
            'privacyProfile' => 'all',
            'searchProfile' => 'yes',
            'userSaveViews' => 'yes'
        ]);

        DB::connection('mysql2')->table('ph7_members_notifications')->insert([
            'profileId' => $memberId,
            'enableNewsletters' => 1,
            'newMsg' => 1,
            'friendRequest' => 1
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::PRICING)->with('success','Profile Created Successfully! Please, Choose a plan to continue...');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }

    /**
     * Generate Random Salt for Password encryption.
     *
     * @param string $sPassword
     *
     * @return string The Hash Password
     */
    public static function hashPwd($sPassword)
    {
        return password_hash($sPassword, self::PWD_ALGORITHM, self::$aPwdOptions);
    }
}
