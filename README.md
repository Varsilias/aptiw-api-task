## How to Setup this project locally

In order to set this project up locally you will need to have Docker and Docker Compose installed. Once you have both installed, you can follow the instruction outlined below to start the local development server.

1. Clone this project by running `git clone git@github.com:Varsilias/aptiw-api-task.git`
2. If successful, you need to navigate into the project folder by running the command `cd aptiw-api-task`
3. Run the command `cp .env.example .env` to create environment variables. Do not forget to update the **.env** file with necessary info, compulsory ones are **APP_KEY** and everythings regarding `DATABASE`
4. Run the command `docker compose up` to boot up the database and its explorer called _adminer_

_NB:_ You can also run the database and its explorer in detached mode by running the command with the **"-d"** flag`docker compose up -d`

5. Once this command runs successfully, visit `http://localhost:8080` and login in with the database credentials present in your **".env"** file

6. Start the development server by running the command `php artisan serve`

7. Visit `http://localhost:8000/graphiql` to test out the graphql **Mutation** and **Queries**

Live URL: https://aptiw-task-backend-cd33552adaac.herokuapp.com/graphiql
