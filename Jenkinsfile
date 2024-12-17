pipeline {
    agent any
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/MilanoGps/testing.git'
            }
        }
        stage('Verify Ansible Files') {
            steps {
                sh '''
                ls -l ansible-project/playbook/hosts
                ls -l ansible-project/playbook/copy_dockerfile.yml
                '''
            }
        }
        stage('Send Dockerfile to Ansible') {
            steps {
                echo 'Executing Ansible Playbook'
                ansiblePlaybook credentialsId: 'seeU_website', 
                    disableHostKeyChecking: true, 
                    installation: 'Ansible', 
                    inventory: 'ansible-project/playbook/hosts', 
                    playbook: 'ansible-project/playbook/copy_dockerfile.yml'
            }
        }
        stage('Build Docker Image') {
            steps {
                sh 'docker build -t seeU_website .'
            }
        }
        stage('Push Image to Docker Hub') {
            steps {
                sh '''
                echo $DOCKER_PASSWORD | docker login -u $DOCKER_USERNAME --password-stdin
                docker push seeU_website
                '''
            }
        }
        stage('Copy Files to Kubernetes') {
            steps {
                sshagent(['kubernetes-ssh-key']) {
                    sh 'scp file1.txt user@kubernetes-server:./'
                }
            }
        }
        stage('Deploy to Kubernetes') {
            steps {
                ansiblePlaybook credentialsId: 'seeU_website', 
                    playbook: 'ansible-project/deploy.yml'
            }
        }
    }
}
