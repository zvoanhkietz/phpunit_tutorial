node {
        stage("Main build") {

            checkout scm

            docker.image('jenkins_slaves_php').inside {

              stage("Install Bundler") {
                sh "composer"
              }
           }

        }

        // Clean up workspace
        step([$class: 'WsCleanup'])

}
