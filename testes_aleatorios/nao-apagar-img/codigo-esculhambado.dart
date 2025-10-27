// import 'dart:io';

// void main() {
// while(true){
//   var caminho = r'C:\bruno\Projetinhos\testes_aleatorios\nao-apagar-img\img\Kasane Pearto.webp';
//   var arquivo = File(caminho);

//   if (arquivo.existsSync()) {

//     for (int i = 0; i <= 100; i += 10) {

//       stdout.write('\x1B[2J\x1B[0;0H');

//       int barraTamanho = (i / 5).round();
//       String barra = '=' * barraTamanho + '-' * (20 - barraTamanho);

//       print('/' * 70);
//       print('');
//       print('Iniciando Sistemas...');
//       print('[$barra] $i%');
//       print('');
//       print('/' * 70);

//       sleep(Duration(seconds: 1));
//     }

//     for (int i = 0; i <= 100; i += 10) {

//       stdout.write('\x1B[2J\x1B[0;0H');

//       int barraTamanho = (i / 5).round();
//       String barra = '=' * barraTamanho + '-' * (20 - barraTamanho);

//       print('/' * 70);
//       print('');
//       print('Verificando arquivos...');
//       print('[$barra] $i%');
//       print('');
//       print('/' * 70);

//       sleep(Duration(seconds: 1));
//     }

//     for (int i = 0; i <= 100; i += 10) {

//       stdout.write('\x1B[2J\x1B[0;0H');

//       int barraTamanho = (i / 5).round();
//       String barra = '=' * barraTamanho + '-' * (20 - barraTamanho);

//       print('/' * 70);
//       print('');
//       print('Iniciando while...');
//       print('[$barra] $i%');
//       print('');
//       print('/' * 70);

//       sleep(Duration(seconds: 1));
//     }
//     continue;
//   }
  
//   else {
//     stdout.write('\x1B[2J\x1B[0;0H');
//     print('');
//     print('='*70);
//     print('Erro no sistema, Uma parte crucial do sistema esta faltando.');
//     print('='*70);
//     print('');

//     while (true) {
//       stdout.write('Deseja continuar? (SIM/NAO): ');
//       String? escolha = stdin.readLineSync()?.toUpperCase();

//       if (escolha == null) {
//         print('Valor inválido!');
//         continue;
//       }

//       if (escolha == "SIM") {
//         print('Continuando programa');
//         print('.' * 70);
//         break;
//       } else if (escolha == "NAO") {
//         stdout.write('\x1B[2J\x1B[0;0H');

//         for (int i = 0; i <= 100; i += 10) {
          
//           // Limpa o terminal
//           stdout.write('\x1B[2J\x1B[0;0H');

//           // Calcula o tamanho da barra
//           int barraTamanho = (i / 5).round(); // cada 5% = 1 bloco
//           String barra = '=' * barraTamanho + '-' * (20 - barraTamanho);

//           // Exibe a barra
//           print('/' * 70);
//           print('');
//           print('Encerrando programa...');
//           print('[$barra] $i%');
//           print('');
//           print('/' * 70);

//           sleep(Duration(seconds: 1));
//         }
//         return;

//       } else {
//         print('Valor inválido');
//         continue;
//       }
//     }
//   }


// }
// }

import 'dart:io';

void main() {
  while (true) {
    var caminho = r'C:\bruno\Projetinhos\testes_aleatorios\nao-apagar-img\img\Kasane Pearto.webp';
    var arquivo = File(caminho);

    if (arquivo.existsSync()) {
      carregar('Iniciando Sistemas...');
      carregar('Verificando arquivos...');
      carregar('Carregando DeskTop...');

      // ===== Mensagem final =====
      stdout.write('\x1B[2J\x1B[0;0H');
      print('/' * 70);
      print('');
      print('SEJA BEM VINDO OPERADOR');
      print('');
      print('/' * 70);
        stdout.write('Fim da demonstração do sistema, isso entrara em loop agora');
        stdin.readLineSync();

    } else {
      mostrarErro();
    }
  }
}

// ===== Funções =====

void carregar(String mensagem) {
  for (int i = 0; i <= 100; i += 10) {
    stdout.write('\x1B[2J\x1B[0;0H');

    int barraTamanho = (i / 5).round();
    String barra = '=' * barraTamanho + '-' * (20 - barraTamanho);

    print('/' * 70);
    print('');
    print(mensagem);
    print('[$barra] $i%');
    print('');
    print('/' * 70);

    sleep(Duration(seconds: 1));
  }
}

void mostrarErro() {
  stdout.write('\x1B[2J\x1B[0;0H');
  print('');
  print('=' * 70);
  print('Erro no sistema, uma parte crucial do sistema está faltando.');
  print('=' * 70);
  print('');

  while (true) {
    stdout.write('Deseja continuar? (SIM/NAO): ');
    String? escolha = stdin.readLineSync()?.toUpperCase();

    if (escolha == null) {
      print('Valor inválido!');
      continue;
    }

    if (escolha == "SIM") {
      print('Continuando programa');
      print('.' * 70);
      break;
    } else if (escolha == "NAO") {
      carregar('Encerrando programa...');
      exit(0);
    } else {
      print('Valor inválido');
    }
  }
}
