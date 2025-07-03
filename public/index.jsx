document.addEventListener("DOMContentLoaded", function() {
    // Cria um elemento div para o overlay de carregamento
    const loading = document.createElement("div");
    loading.style.position = "fixed";
    loading.style.top = "0";
    loading.style.left = "0";
    loading.style.width = "100vw";
    loading.style.height = "100vh";
    loading.style.background = "rgba(255,255,255,0.8)";
    loading.style.display = "flex";
    loading.style.alignItems = "center";
    loading.style.justifyContent = "center";
    loading.style.zIndex = "9999";

    // Cria o spinner
    const spinner = document.createElement("div");
    spinner.style.width = "60px";
    spinner.style.height = "60px";
    spinner.style.border = "8px solid #f3f3f3";
    spinner.style.borderTop = "8px solid #3498db";
    spinner.style.borderRadius = "50%";
    spinner.style.animation = "spin 1s linear infinite";

    // Adiciona o spinner ao overlay
    loading.appendChild(spinner);

    // Adiciona o overlay ao body
    document.body.appendChild(loading);

    // Adiciona a animação via CSS
    const style = document.createElement("style");
    style.innerHTML = `
        @keyframes spin {
            0% { transform: rotate(0deg);}
            100% { transform: rotate(360deg);}
        }
    `;
    document.head.appendChild(style);

    // Remove o loading quando a página carregar completamente
    window.addEventListener("load", function() {
        loading.remove();
        style.remove();
    });
})