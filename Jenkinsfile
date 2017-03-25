node {
        stage("Main build") {

            checkout scm

              stage("Install Bundler") {
                sh "composer"
              }

        }

        // Clean up workspace
        step([$class: 'WsCleanup'])

}
