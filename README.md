# roles

Simple add trait to user model to use roles. Contains role middleware. 

# Instalation: 

## add to "\config\app.php":
    'providers' => [
        ...
        Aanyszek\Roles\RolesServiceProvider::class,
        ...
    ],


## add to "\app\User.php":
    ...
    use \Aanyszek\Roles\RolesTrait;
    ...

# Usage 

## In route: 

    Route::group(['namespace' => 'Admin', 'middleware' => ['web', 'auth','role:admin'], 'prefix' => 'admin'], function () {
        Route::resource('some', 'SomeController');
    });

## In seeder:  

        $role = Aanyszek\Roles\Role::create(['name' => 'admin']);

        $user = \App\User::create([
                    'name' => 'Administrator',
                    'email' => 'a.anyszek@linux.pl',
                    'password' => bcrypt('adminadmin'),
        ]);

        $user->roles()->attach($role);
