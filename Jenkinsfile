pipeline {
    agent any

    environment {
        FTP_SERVER = 'www'
        FTP_USERNAME = 'tenant1@toysroom.it'
        FTP_PASSWORD = '&gIRyy8e-o{2'
    }

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

        stage('Run Tests') {
            steps {
                sh 'php artisan test'
            }
        }


        stage('Deploy to FTP') {
            steps {
                script {
                    publishOverFTP(
                        allowMissing: false,
                        cleanRemote: false,
                        excludes: '',
                        ftpCredentialsId: FTP_SERVER,
                        targetDir: '',
                        sourceFiles: '**/*.*'
                    )
                }
            }
        }
    }

    post {
        success {
            echo 'Deploy OK'
            mail to: 'alessandro.brugioni@gmail.com',
                subject: "Build Success: ${currentBuild.fullDisplayName}.",
                body: "The build was successful! Check the logs here: ${env.BUILD_URL}"
        }

        failure {
            echo 'Deploy KO'
            mail to: 'alessandro.brugioni@gmail.com',
                subject: "Build failed: ${currentBuild.fullDisplayName}",
                body: "The build was failed!. Check the logs here: ${env.BUILD_URL}"
        }
     }
}