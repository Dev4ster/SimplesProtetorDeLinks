Protetor de Links em php+Html+JS

O objetivo desse projeto é só compartilhar o conhecimento e ajudar alguns sites que querem ter uma proteção em seus links , é claro que há a possibilidade de criarem um bot pra pegar a url final mesmo assim esse script se mostra promissor para um ato moentânio.

#Instalação:

baixe o script e suba para seu servidor na pasta que ficará o protetor.
edite as linhas 18 ( index.php) colocando a url do seu site e linha 25 (adm.php) colocando a url do protetor em seu servidor com o parâmetro '?url='. 3.por fim navegue até https://www.google.com/recaptcha/ e crie uma key para seu site com recaptcha v2 e configure a linha 106 do index.php na parte ( data-sitekey="suakey"> ).
FIM!

@Freatures V1.0 

-Proteção com capcha 
-Fácil customização 
-Responsive 
-adm.php creator links

@Como funciona? 
simples quando você compartilhar seu link de download ao invés de colocar o link no post navegue até o arquivo adm.php, lá você ira colcar o link e assim eel vai criar um mais ou menos assim http://localhost/p/protetorbr/?url=68747470733a2f2f6769746875622e636f6d2f44657634737465722f esse monte de numero é o link codificado em hexadecimal :3 que no caso é esse https://github.com/Dev4ster/ , ai quando o usuario vai pra esse link la no index ele é capturado e retransformado de volta e colocado numa variável em js, até ai tudo bem, quando o usuário passa pelo captcha ele atibui o href do botão de download os dados da variável e assim o botão fica com um link , isso previne de alguém ir ispesionar o elemento, tenho mais idéias de proteção numa V2.0 ultilizando full javascript , já que eu tenho mais fácilidade em php e consegui funcões como de encodar mais fácil. é isso:3

#####Remoção de créditos ########
criei um script para garantir que não seja fácil a remoção dos créditos redirecionando para meu site https://brsociety.com.br, eu pesquisei bastante para contribuir isso deu trabalho deixar bonito ,então por favor deixe os créditos lá! ps: não cobro pra tira.

--V2.0? vai depender desse...(penso num sistema de monitoramento)

