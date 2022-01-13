<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Facades\DB;
use App\Models\Section;
use App\Models\HeaderSection;
use App\Models\AboutSection;
use App\Models\SkillSection;



class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {


        Validator::make($input, [
            'full_name' => ['required', 'string', 'max:255'],
            'user_id' => ['required', 'string', 'max:255'],

            'user_id' => [
                'required',
                'string',
                'max:255',
                'regex:/^\S*$/u',
                Rule::unique(User::class),
            ],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();



        $user= User::create([
            'full_name' => $input['full_name'],
            'user_id' => $input['user_id'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        Section::create([
            'header' => 1,
            'about' => 1,
            'facts' => 1,
            'skills' => 1,
            'resume' => 1,
            'portfolio' => 1,
            'services' => 1,
            'testimonials' => 1,
            'contact' => 1,
            'user_id' => $user->user_id
        ]);

        HeaderSection::create([
            'user_id' => $user->user_id
        ]);

        AboutSection::create([
            'user_id' => $user->user_id
        ]);

        SkillSection::create([
            'user_id' => $user->user_id
        ]);

        return $user;
    }
}
