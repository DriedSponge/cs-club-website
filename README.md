## About
This is the github repository for the BHS Computer Science Club website.

This website uses the Laravel PHP framework.

## Contributing
If you are a member of the club and wanting to contribute to this project, more information on how you can do that will be released soon.

These videos will help you get started:
- [Installing Development Tools and Getting The Project Ready For Development (No Docker)](https://www.youtube.com/watch?v=pEJEi8trSpc)
- [Getting Started With Page Stuff](https://www.youtube.com/watch?v=d9kfCARLCR8)


## Installing For Development


### Using Docker
If you don't know what docker is, watch [this video](https://www.youtube.com/watch?v=Gjnup-PuquQ) for a basic understanding 

Make sure you have docker installed on your computer:
- [Docker For Mac](https://hub.docker.com/editions/community/docker-ce-desktop-mac/) - [Install Instructions](https://docs.docker.com/docker-for-mac/install/)
- [Docker For Windows](https://hub.docker.com/editions/community/docker-ce-desktop-windows/) - [Install Instructions](https://docs.docker.com/docker-for-windows/install/)

For docker to work, you must have BIOS level virtualization enabled on your system.
- On windows you do enable it in your system bios 
- As far as I am aware, if you're on **mac**, you **do not** have to worry about this.

I will go over all of this in a video in the future.

**Clone the repository or download the zip**
`git clone https://github.com/DriedSponge/cs-club-website.git`

**Create the env file (in the src folder)**

Clone the `.env.example` file in the src directory and rename the copy to `.env`. Or you can create a new file and call it `.env`, then copy and paste the contents from `.env.exaple`.

**Run the docker build command (in the project root)**

`docker-compose up -d --build`

**When you are done editing, shut down the docker containers**

`docker-compose down`

### Not using docker

**Make sure you run any commands in the /src directory**

Make sure you have the following applications installed:
- [Git](https://git-scm.com)
- [Composer](https://getcomposer.org/)
- [NodeJS](https://nodejs.org/en/)
- [XAMPP](https://www.apachefriends.org/index.html)

**Clone the repository:**

`git clone https://github.com/DriedSponge/cs-club-website.git`

**Install JS Dependencies:**

`npm install`

**Install Composer Dependencies:**

`composer install`

**Compile CSS and JS**

`npm run dev`

**Start The Local Dev Server**

`php artisan serve`

**If you need any help, watch [this video](https://www.youtube.com/watch?v=pEJEi8trSpc) and skip to the parts you need to see.**

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).
