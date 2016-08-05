# roles

Simple add trait to user model to use roles. Contains role middleware. 

# Instalation: 

## add to "\config\app.php":
    'providers' => [
        ...
        Bunta\Roles\RolesServiceProvider::class,
        ...
    ],


## add to "\app\User.php":
    ...
    use \Bunta\Roles\RolesTrait;
    ...

# Usage 

## In route: 

    Route::group(['namespace' => 'Admin', 'middleware' => ['web', 'auth','role:admin'], 'prefix' => 'admin'], function () {
        Route::resource('some', 'SomeController');
    });

## In seeder:  

        $role = Bunta\Roles\Role::create(['name' => 'admin']);

        $user = \App\User::create([
                    'name' => 'Administrator',
                    'email' => 'a.anyszek@gmail.com',
                    'password' => bcrypt('adminadmin'),
        ]);

        $user->roles()->attach($role);