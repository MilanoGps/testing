pipeline {
    agent any
    stages {
        stage('Build') {
            steps {
                git  'https://github.com/Faqs1/Kelompok5_Komputasi.git'
            }
        }
        stage('Test') {
            steps {
                sh 'ansible-galaxy install -r requirements.yml'
            }
        }
        stage('Deploy') {
            steps {
                 ansibleplaybook credentialsId: 'b6dc3518-4b6e-4774-a292-d5aeda03de68', inventory: 'hosts', playbook: 'mariadb.yml'
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
