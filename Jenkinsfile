pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'master', url: 'https://github.com/MilanoGps/testing.git/'
            }
        }
        stage('Send Dockerfile to Ansible') {
            steps {
                echo 'Executing Ansible Playbook'
                ansiblePlaybook credentialsId: 'seeU_website', disableHostKeyChecking: true, installation: 'Ansible', inventory: 'ansible-project/playbook/hosts', playbook: 'ansible-project/playbook/copy_dockerfile.yml', vaultTmpPath: ''
            }
        }
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t seeU_website .'
            }
        }
        stage('Push Image to Docker Hub') {
            steps {
                sh 'docker push seeU_website'
            }
        }
        stage('Copy Files to Kubernetes') {
            steps {
                sh 'scp file1.txt user@kubernetes-server:./'
            }
        }
        stage('Deploy to Kubernetes') {
            steps {
                ansiblePlaybook playbook: 'deploy.yml'
            }
        }
    }
}
