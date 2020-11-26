{{--
We are extending our default layout, therefore making this page a child of that layout.
Since this is now a child of the default layout, it will inherit all of the default layouts properties.'

Views which extend a Blade layout may inject content into the layout's sections using @section directives.
Remember, the contents of these sections will be displayed in the layout using @yield.
https://laravel.com/docs/8.x/blade#extending-a-layout
--}}
@extends('layouts.app')

{{--
The @section directive, as the name implies, defines a section of content.

This is how we set our page title. We set the yield for title in our head include,
so now we want to specify what goes in that yield for this page.
--}}
@section('title','Members')

{{-- Same as the title, but for the description. --}}
@section('description',"Our clubs members")

{{-- This is where we define what goes into our content section --}}
@section('content')
    <div class="members">
        <h1 class="members-title" >Club Officers</h1>
        <div class="members-row">
            <div>
                <img src="imgs/members/soham.jpg" alt="Soham" class="members-image">
                <h2 class="text-center">Soham</h2>
                <h3 class="text-center">President</h3>
            </div>
        </div>
        <div class="members-row">
            <div class="members-column">
                <img src="imgs/members/sathvik.jpg" alt="Sathvik" class="members-image">
                <h2 class="text-center">Sathvik</h2>
                <h3 class="text-center">Internal Vice President</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/adit.jpg" alt="Adit Gupta" class="members-image">
                <h2 class="text-center">Adit Gupta</h2>
                <h3 class="text-center">External Vice President</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Clair Li" class="members-image">
                <h2 class="text-center">Clair Li</h2>
                <h3 class="text-center">Secretary</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/roshan.jpg" alt="Roshan Skariah" class="members-image">
                <h2 class="text-center">Roshan Skariah</h2>
                <h3 class="text-center">Treasurer</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/dash.jpg" alt="Dash Pickrell" class="members-image">
                <h2 class="text-center">Dash Pickrell</h2>
                <h3 class="text-center">Treasurer</h3>
            </div>
        </div>
        <div class="members-row">
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Yasmine Shubber" class="members-image">
                <h2 class="text-center">Yasmine Shubber</h2>
                <h3 class="text-center">Public Relations</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/wyatt2.jpg" alt="Wyatt Ford" class="members-image">
                <h2 class="text-center">Wyatt Ford</h2>
                <h3 class="text-center">Webmaster</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Nathan Hendrickson-" class="members-image">
                <h2 class="text-center">Nathan Hendrickson</h2>
                <h3 class="text-center">Co-Events Chair</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Areeb Emran-" class="members-image">
                <h2 class="text-center">Areeb Emran</h2>
                <h3 class="text-center">Co-Events Chair</h3>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Jong-Hyun Lee" class="members-image">
                <h2 class="text-center">Jong-Hyun Lee</h2>
                <h3 class="text-center">Fundraising Chair</h3>
            </div>
        </div>
        <h1 class="members-title" >Club Members</h1>
        <div class="members-row">
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Kaden Allen" class="members-image">
                <h2 class="text-center">Kaden Allen</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Yashwant Datti" class="members-image">
                <h2 class="text-center">Yashwant Datti</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Alex Dimov" class="members-image">
                <h2 class="text-center">Alex Dimov</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Shunzo Hida" class="members-image">
                <h2 class="text-center">Shunzo Hida</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Manas Kumar" class="members-image">
                <h2 class="text-center">Manas Kumar</h2>
            </div>
        </div>
        <div class="members-row">
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Ivan Labovich" class="members-image">
                <h2 class="text-center">Ivan Labovich</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Michelle Li" class="members-image">
                <h2 class="text-center">Michelle Li</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Emily Pham" class="members-image">
                <h2 class="text-center">Emily Pham</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Amanda Sim" class="members-image">
                <h2 class="text-center">Amanda Sim</h2>
            </div>
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Khushi Singh" class="members-image">
                <h2 class="text-center">Khushi Singh</h2>
            </div>
        </div>
        <div class="members-row">
            <div class="members-column">
                <img src="imgs/members/blank-user.gif" alt="Jordan Tucker" class="members-image">
                <h2 class="text-center">Jordan Tucker</h2>
            </div>
        </div>
    </div>

@endsection
