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

        stage('Code Quality Analysis') {
            steps {
                sh 'vendor/bin/phpstan analyse --level=max app/'
                sh 'vendor/bin/phpcs --standard=PSR12 app/'
                sh 'vendor/bin/phpmd app/ text cleancode,codesize,design'
            }
        }

        stage('Run Security Check') {
            steps {
                script {
                    sh 'vendor/bin/security-checker security:check || true'
                }
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