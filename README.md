<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.webconia.de/wp-content/uploads/2020/03/webconia_logo.svg" width="400"></a></p>

 

## About The task

The task consists of two parts
- back-end (PHP Laravel, MySQL, Docker)
- frontend (react js, redux, Redux Toolkit)
- WebSocket for real-time update (pusher)

## Demo
- You can check a live demo from here [fronend link]
- [postman link]
You can update the visitors counter by hitting api with published API with the postman and update the JSON object and you will see immediately the update on front end part


## Bachend

<p align="center"><img src="data:image/png;base64,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" width="200"></p>


### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
