nodo {
  etapa('SCM') {
    pago scm
  }
  stage('Análisis de SonarQube') {
    def scannerHome = herramienta 'SonarScanner';
    conSonarQubeEnv() {
      sh "${scannerHome}/bin/sonar-scanner"
    }
  }
}
