pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/toysroom/laravel-devops.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'composer install'
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }
    }

    post {
        success {
            echo 'Deploy OK'
        }

        failure {
            echo 'Deploy KO'
        }
     }
}