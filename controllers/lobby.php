<?php

class Learnvel_Lobby_Controller extends Base_Controller {

    /*
     |--------------------------------------------------------------------------
     | The Default Controller
     |--------------------------------------------------------------------------
     |
     | Instead of using RESTful routes and anonymous functions, you might wish
     | to use controllers to organize your application API. You'll love them.
     |
     | This controller responds to URIs beginning with "home", and it also
     | serves as the default controller for the application, meaning it
     | handles requests to the root of the application.
     |
     | You can respond to GET requests to "/home/profile" like so:
     |
     |		public function action_profile()
     |		{
     |			return "This is your profile!";
     |		}
     |
     | Any extra segments are passed to the method as parameters:
     |
     |		public function action_profile($id)
     |		{
     |			return "This is the profile for user {$id}.";
     |		}
     |
     */
    public function action_index() {
        Session::put('name', 'Taylor');
        $name = Session::get('name');
        return "Hello,<br /> $name is in the Learnvel Controller playing with sessions!<br /> Go check it out.<br /><pre>/bundles/learnvel/controllers/lobby.php";
        //return View::make('lobby.index');
    }

}
