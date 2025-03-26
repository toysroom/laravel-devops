pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/toysroom/laravel-devops.git'
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