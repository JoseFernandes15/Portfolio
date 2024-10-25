window.onload = function () {
  mensagem(); // Exibe mensagens de sucesso ou erro no modal
  //se for a pagina responsiva, verificar a largura da pagina sempre que ela é redimensionada
  if (window.location.pathname === "/responsive.php") {
    window.addEventListener("resize", verificarLargura);
    verificarLargura();
  }
  //se houver esso no turnstile aparecer erro no formulario
  const url = window.location.search;
  if (url.includes("?erro=turnstile")) {
    const errorMessage = document.getElementById("errorMessage");
    const language = getCookieValue("language");

    if (language == "pt_pt") {
      errorMessage.innerHTML = "Por favor confirme que não é um robô!";
    } else {
      errorMessage.innerHTML = "Please confirm that you are not a robot!";
    }
  }
};

function verificarLargura() {
  var larguraDispositivo =
    window.innerWidth ||
    document.documentElement.clientWidth ||
    document.body.clientWidth;

  // Se a largura for menor que 1000 pixels, redireciona para a página inicial
  if (larguraDispositivo < 1000) {
    window.location.href = "index.php";
  }
}

function changeLanguage(language) {
  // Define o cookie com a nova linguagem, válido por 14 dias e recarrega a pagina
  document.cookie =
    "language=" +
    language +
    "; path=/; domain=josefernandes.pt; secure; samesite=Lax; max-age=" +
    14 * 24 * 60 * 60;

  // Recarrega a página para aplicar a mudança
  window.location.reload();
}

function mensagem() {
  // Função para mostrar e ocultar o modal
  function showModal(modalId) {
    const modal = document.getElementById(modalId);
    modal.style.display = "block";
    setTimeout(() => {
      modal.style.display = "none";
    }, 5000);
  }
  
  const url = window.location.search;
  // Exibe o modal da mensagem de sucesso
  if (url.includes("?sucesso=1") || url.includes("?success=1")) {
    showModal("ModalSucesso");
    return true;
  }

  return false;
}

function scrollToSection(e) {
  // Faz scroll suave para a seção especificada
  const n = document.getElementById(e);

  n.scrollIntoView({ behavior: "smooth" });
}

function email() {
  window.location.href = "mailto:zepedrofernandessampaio@gmail.com";
}

function linkdin() {
  window.open("https://www.linkedin.com/in/josé-pedro-fernandes", "_blank");
}

function getCookieValue(cookieName) {
  // Pega no valor da cookie espeficiada
  const cookies = document.cookie.split("; ");
  for (let cookie of cookies) {
    const [name, value] = cookie.split("=");
    if (name === cookieName) {
      return decodeURIComponent(value);
    }
  }
  return null; // Retorna null se o cookie não for encontrado
}

function validateEmail() {
  //pegar nos elementos html
  const email = document.getElementById("email").value.trim();
  const content = document.getElementById("conteudoEmail").value.trim();
  const errorMessage = document.getElementById("errorMessage");

  const language = getCookieValue("language");

  //mensagens de erro dependendo da linguagem
  let erro_email, erro_longa, erro_sem;
  if (language == "pt_pt") {
    erro_email = "Por favor introduza um email válido!";
    erro_longa = "A sua mensagem é demasiado longa!";
    erro_sem = "Por favor introduza uma mensagem!";
  } else {
    erro_email = "Please enter a valid email address!";
    erro_longa = "Your message is too long!";
    erro_sem = "Please write a message!";
  }

  // Verifica se o email é válido
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email) || email.length > 256) {
    errorMessage.textContent = erro_email; // Evita XSS usando textContent
    return false;
  }

  // Verifica o comprimento da mensagem
  if (content.length > 250) {
    errorMessage.innerHTML = erro_longa;
    return false;
  } else if (content.length === 0) {
    errorMessage.innerHTML = erro_sem;
    return false;
  }

  // Se todas as verificações passaram
  errorMessage.innerHTML = "";
  return true;
}

$(".client_owl-carousel").owlCarousel({
  loop: !0,

  margin: 20,

  dots: !1,

  nav: !0,

  navText: [
    '<i class="fa fa-angle-left" aria-hidden="true"></i>',

    '<i class="fa fa-angle-right" aria-hidden="true"></i>',
  ],

  autoplay: !0,

  autoplayHoverPause: !0,

  responsive: { 0: { items: 1 }, 600: { items: 2 }, 1e3: { items: 2 } },
});

function animarTexto() {
  const elemento = document.getElementById("sobre");
  const texto = elemento.textContent;
  elemento.innerHTML = ""; // Limpa o conteúdo original

  // Loop para cada caractere do texto
  texto.split("").forEach((letra, index) => {
    const span = document.createElement("span");
    span.textContent = letra === " " ? "\u00A0" : letra;
    span.style.animationDelay = `${index * 0.13}s`; // Atraso na animação para cada letra
    elemento.appendChild(span);
  });
}
