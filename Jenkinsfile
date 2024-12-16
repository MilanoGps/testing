pipeline {
    agent any
    environment {
        DOCKER_USERNAME = credentials('dockerhub-username')
        DOCKER_PASSWORD = credentials('dockerhub-password')
    }
    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/dzulfiqar03/tubes_komputasiawan_seeU.git'
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
                sh '''
                if [ ! -f Dockerfile ]; then
                    echo "Dockerfile not found!"
                    exit 1
                fi
                docker build -t $DOCKER_USERNAME/seeu_website .
                '''
            }
        }
        stage('Push Image to Docker Hub') {
            steps {
                sh '''
                echo $DOCKER_PASSWORD | docker login -u $DOCKER_USERNAME --password-stdin
                docker push $DOCKER_USERNAME/seeu_website
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
                ansiblePlaybook credentialsId: 'seeU_website', playbook: 'ansible-project/deploy.yml'
            }
        }
    }
}

