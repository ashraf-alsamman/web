<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.webconia.de/wp-content/uploads/2020/03/webconia_logo.svg" width="400"></a></p>



 

## About The task

- back-end (PHP Laravel, MySQL, Docker)
- frontend (react js, redux, Redux Toolkit)
- WebSocket for real-time update (pusher)

## Demo
- You can check a live demo from here [fronend link]
- [postman link]
You can update the visitors counter by hitting api with published API with the postman and update the JSON object and you will see immediately the update on front end part

 <img src='https://i.postimg.cc/3xjbPxK3/webconia.png' border='0' alt='webconia'/> 

### Equipments

- **[Laravel](https://laravel.com/)**
- **[Docker](https://www.docker.com/)**
- **[Nodejs](https://nodejs.org/en/)**
- **[Pusher](https://pusher.com/)**

- **[ReactJs](https://reactjs.org/)**
- **[Redux](https://redux.js.org/)**
- **[Redux-toolkit](https://redux-toolkit.js.org/)**

  
# Steps
- install laravel project on docker
- run container docker

- install laravel vendor 
 ./vendor/bin/sail composer install
 
 
- run migration 
- ./vendor/bin/sail php artisan migrate

- run backend project
- ./vendor/bin/sail up

- run frontend (react js) project
- yarn install
- yarn start

Try localhost/webhook/create
and change data in json object and check frontend part


 

 

 
