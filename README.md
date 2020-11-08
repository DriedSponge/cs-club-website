## About
This is the github repository for the BHS Computer Science Club website.

This website uses the Laravel PHP framework.


## Bootstrap
We are using the bootstrap css library, you can find the documentation [here](https://v5.getbootstrap.com/docs/5.0/getting-started/introduction/). Please take some time to look at all of the componets. Also please take a look at their [grid system](https://v5.getbootstrap.com/docs/5.0/layout/grid/). This will help make the content responseive(so it looks good on mobile), and it will make the content look more structued.

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

**If you are on Windows 10**, you must have BIOS level virtualization enabled on your system.
- On windows you enable it in your system bios 
- To access your bios
    - Open the start menu
    - Click on the power icon
    - Hold shift & click restart while holding shift.
    - A menu will popup shortly, click troubleshoot
    - Click advanced options
    - And then click UEFI firmware settings, then restart.
- Once you are in your bios, there should be a setting in there to enable virtualization
- **I strongly reccomend looking up `how to enable virtualization on {insert pc model or motherboard model}`. Becuase every system bios is different (unless the systems are the same model, or have the same MB), it is difficult for me to help you if you run into any issues.**

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
