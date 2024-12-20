pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                git 'https://github.com/MilanoGps/testing.git'
            }
        }
        stage('Test') {
            steps {
                echo '...'
            }
        }
        stage('Deploy') {
            steps {
                echo '...'
            }
        }
    }
    post {
        success {
            echo 'Deployment successful!'
        }
        failure {
            echo 'Deployment failed!'
        }
    }
}
