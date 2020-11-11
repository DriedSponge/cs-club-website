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
@section('title','Events')

{{-- Same as the title, but for the description. --}}
@section('description',"A club that strives to build a community of students interested in Computer Science and coding that works on projects together. It encourages students to challenge themselves by attending hackathons, and competitive competitions like the U.S.A Computing Olympiad. No previous coding experience required!")

{{-- This is where we define what goes into our content section --}}
@section('content')
    <div class="main" class="container">
        <div class="events">
						<h1 class="text-center">Events</h1>
						<h3>Our club attends many events that encourage us to learn new things, and build community. </h3>
						<hr/>

						<ul>
								<li>
										<p><b>Critters Competition</b> - Wednesday, November 25</p>
										<p>We will be designing our own critters and having them face off to see which one ends up dominating the critter world!</p>
										<p>P.S. The winner gets a prize!</p>
										<hr/>
							  </li>
								
								<li>
										<p><b>Virtual CodeDay</b> - December 4-6</p>
										<p>We will be attending the Virtual CodeDay hackathon to help enhance our technical and team building skills. By attending this event, we will be also be able to meet new people and create a network </p>
										<a href="https://virtual.codeday.org/">Register here</a>
										<hr/>
								</li>

								<li>
										<p><b>First Contest</b> - Dec 13-16</p>
										<p>Our first competitive competition will be the U.S.A Computing Olympiad. It will really challenge us to learn new and advanced concepts, and further develop our problem solving skills. We will be having weekly drop-in practice sessions to help us learn how to tackle this challenge!</p>
										<a href="http://www.usaco.org/">Register Here</a>
								</li>
						</ul>
        </div>
    </div>
@endsection
