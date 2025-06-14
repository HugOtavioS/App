import { createRoot } from '/node_modules/react-dom/client';
import React from "react";
import CardHome from './components/cardHome';
import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { FlipWords } from "./components/flipWords";
import { Button } from './components/buttons/movingBorder';
import { ArrowRight, GithubLogo, LinkedinLogo } from '/node_modules/@phosphor-icons/react';
import { jsx as _jsx, jsxs as _jsxs, Fragment as _Fragment } from "react/jsx-runtime";
function Home() {
  const words = ["sua Vida", "seu Trabalho", "sua Rotina", "suas Tarefas"];
  return /*#__PURE__*/_jsxs(_Fragment, {
    children: [/*#__PURE__*/_jsx(HeaderCommon, {}), "            ", /*#__PURE__*/_jsxs("main", {
      className: "flex flex-col items-center gap-18 p-6 pt-32 min-h-screen w-[80%] mx-auto",
      children: [/*#__PURE__*/_jsx("div", {
        className: "w-full mb-16",
        children: /*#__PURE__*/_jsxs("div", {
          className: "flex flex-col gap-6 items-center",
          children: [/*#__PURE__*/_jsx("h1", {
            className: "text-7xl text-center font-bold bg-gradient-to-r from-[#06202B] to-[#D4C9BE] bg-clip-text text-transparent",
            children: "Sobre o Appy"
          }), /*#__PURE__*/_jsxs("p", {
            className: "text-xl text-center text-gray-700 max-w-2xl",
            children: ["Um assistente pessoal inteligente projetado para simplificar ", /*#__PURE__*/_jsx(FlipWords, {
              words: words
            }), " com eleg\xE2ncia e efici\xEAncia."]
          })]
        })
      }), /*#__PURE__*/_jsxs("div", {
        className: "grid grid-cols-1 md:grid-cols-2 gap-12 w-full max-w-6xl mb-16",
        children: [/*#__PURE__*/_jsxs("div", {
          className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg",
          children: [/*#__PURE__*/_jsx("h2", {
            className: "text-2xl font-bold mb-4 text-[#06202B]",
            children: "O Projeto"
          }), /*#__PURE__*/_jsx("p", {
            className: "text-gray-700 leading-relaxed",
            children: "Appy \xE9 uma aplica\xE7\xE3o web moderna que combina o poder do PHP no backend com React no frontend para criar uma experi\xEAncia fluida e intuitiva. Desenvolvido com foco em produtividade e organiza\xE7\xE3o pessoal, o Appy oferece ferramentas essenciais para gerenciar seu dia a dia com efici\xEAncia."
          })]
        }), /*#__PURE__*/_jsxs("div", {
          className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg",
          children: [/*#__PURE__*/_jsx("h2", {
            className: "text-2xl font-bold mb-4 text-[#06202B]",
            children: "Tecnologias"
          }), /*#__PURE__*/_jsxs("ul", {
            className: "text-gray-700 space-y-2",
            children: [/*#__PURE__*/_jsx("li", {
              children: "\u2022 Backend em PHP com arquitetura MVC"
            }), /*#__PURE__*/_jsx("li", {
              children: "\u2022 Frontend em React com Tailwind CSS"
            }), /*#__PURE__*/_jsx("li", {
              children: "\u2022 Sistema de rotas personalizado"
            }), /*#__PURE__*/_jsx("li", {
              children: "\u2022 Gerenciamento de sess\xE3o seguro"
            }), /*#__PURE__*/_jsx("li", {
              children: "\u2022 Interface moderna e responsiva"
            })]
          })]
        })]
      }), /*#__PURE__*/_jsx("div", {
        className: "w-full max-w-6xl mb-16",
        children: /*#__PURE__*/_jsxs("div", {
          className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg",
          children: [/*#__PURE__*/_jsx("h2", {
            className: "text-2xl font-bold mb-6 text-[#06202B]",
            children: "Miss\xE3o e Objetivos"
          }), /*#__PURE__*/_jsxs("div", {
            className: "grid grid-cols-1 md:grid-cols-3 gap-8",
            children: [/*#__PURE__*/_jsxs("div", {
              children: [/*#__PURE__*/_jsx("h3", {
                className: "text-lg font-semibold text-[#06202B] mb-3",
                children: "Simplificar o Dia a Dia"
              }), /*#__PURE__*/_jsx("p", {
                className: "text-gray-700",
                children: "Criar uma ferramenta intuitiva que ajude as pessoas a organizarem suas tarefas di\xE1rias, compromissos e metas de forma eficiente e sem complica\xE7\xF5es."
              })]
            }), /*#__PURE__*/_jsxs("div", {
              children: [/*#__PURE__*/_jsx("h3", {
                className: "text-lg font-semibold text-[#06202B] mb-3",
                children: "Produtividade Inteligente"
              }), /*#__PURE__*/_jsx("p", {
                className: "text-gray-700",
                children: "Oferecer recursos que n\xE3o apenas organizem, mas tamb\xE9m otimizem a forma como as pessoas gerenciam seu tempo e prioridades."
              })]
            }), /*#__PURE__*/_jsxs("div", {
              children: [/*#__PURE__*/_jsx("h3", {
                className: "text-lg font-semibold text-[#06202B] mb-3",
                children: "Acessibilidade"
              }), /*#__PURE__*/_jsx("p", {
                className: "text-gray-700",
                children: "Disponibilizar uma plataforma acess\xEDvel e adapt\xE1vel \xE0s necessidades de diferentes usu\xE1rios, independente de sua experi\xEAncia com tecnologia."
              })]
            })]
          })]
        })
      }), /*#__PURE__*/_jsx("div", {
        className: "w-full max-w-6xl mb-16",
        children: /*#__PURE__*/_jsxs("div", {
          className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg",
          children: [/*#__PURE__*/_jsx("h2", {
            className: "text-2xl font-bold mb-6 text-[#06202B]",
            children: "Funcionalidades"
          }), /*#__PURE__*/_jsxs("div", {
            className: "grid grid-cols-1 md:grid-cols-2 gap-8",
            children: [/*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold",
                children: "1"
              }), /*#__PURE__*/_jsxs("div", {
                children: [/*#__PURE__*/_jsx("h3", {
                  className: "text-lg font-semibold text-[#06202B] mb-2",
                  children: "Calend\xE1rio Inteligente"
                }), /*#__PURE__*/_jsx("p", {
                  className: "text-gray-700",
                  children: "Visualize e gerencie seus compromissos com uma interface intuitiva e adapt\xE1vel \xE0s suas necessidades."
                })]
              })]
            }), /*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold",
                children: "2"
              }), /*#__PURE__*/_jsxs("div", {
                children: [/*#__PURE__*/_jsx("h3", {
                  className: "text-lg font-semibold text-[#06202B] mb-2",
                  children: "Gerenciamento de Tarefas"
                }), /*#__PURE__*/_jsx("p", {
                  className: "text-gray-700",
                  children: "Organize suas tarefas com prioridades, prazos e categorias personaliz\xE1veis."
                })]
              })]
            }), /*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold",
                children: "3"
              }), /*#__PURE__*/_jsxs("div", {
                children: [/*#__PURE__*/_jsx("h3", {
                  className: "text-lg font-semibold text-[#06202B] mb-2",
                  children: "An\xE1lise de Produtividade"
                }), /*#__PURE__*/_jsx("p", {
                  className: "text-gray-700",
                  children: "Acompanhe seu progresso e identifique padr\xF5es para otimizar sua rotina."
                })]
              })]
            }), /*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold",
                children: "4"
              }), /*#__PURE__*/_jsxs("div", {
                children: [/*#__PURE__*/_jsx("h3", {
                  className: "text-lg font-semibold text-[#06202B] mb-2",
                  children: "Integra\xE7\xE3o Flex\xEDvel"
                }), /*#__PURE__*/_jsx("p", {
                  className: "text-gray-700",
                  children: "Conecte-se com outras ferramentas e mantenha tudo sincronizado em um s\xF3 lugar."
                })]
              })]
            })]
          })]
        })
      }), /*#__PURE__*/_jsx("div", {
        className: "w-full max-w-6xl mb-16",
        children: /*#__PURE__*/_jsxs("div", {
          className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg",
          children: [/*#__PURE__*/_jsx("h2", {
            className: "text-2xl font-bold mb-6 text-[#06202B]",
            children: "Roadmap do Projeto"
          }), /*#__PURE__*/_jsxs("div", {
            className: "space-y-6",
            children: [/*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-24 shrink-0 text-[#06202B] font-semibold",
                children: "Fase 1"
              }), /*#__PURE__*/_jsxs("div", {
                className: "flex-1 bg-white/50 p-4 rounded-lg",
                children: [/*#__PURE__*/_jsx("h3", {
                  className: "font-semibold text-[#06202B] mb-2",
                  children: "Funcionalidades B\xE1sicas"
                }), /*#__PURE__*/_jsx("p", {
                  className: "text-gray-700",
                  children: "Implementa\xE7\xE3o do calend\xE1rio, sistema de tarefas e interface base do usu\xE1rio."
                })]
              })]
            }), /*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-24 shrink-0 text-[#06202B] font-semibold",
                children: "Fase 2"
              }), /*#__PURE__*/_jsxs("div", {
                className: "flex-1 bg-white/50 p-4 rounded-lg",
                children: [/*#__PURE__*/_jsx("h3", {
                  className: "font-semibold text-[#06202B] mb-2",
                  children: "An\xE1lise e Integra\xE7\xE3o"
                }), /*#__PURE__*/_jsx("p", {
                  className: "text-gray-700",
                  children: "Adi\xE7\xE3o de recursos anal\xEDticos e possibilidade de integra\xE7\xE3o com outras plataformas."
                })]
              })]
            }), /*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-24 shrink-0 text-[#06202B] font-semibold",
                children: "Fase 3"
              }), /*#__PURE__*/_jsxs("div", {
                className: "flex-1 bg-white/50 p-4 rounded-lg",
                children: [/*#__PURE__*/_jsx("h3", {
                  className: "font-semibold text-[#06202B] mb-2",
                  children: "Expans\xE3o e Otimiza\xE7\xE3o"
                }), /*#__PURE__*/_jsx("p", {
                  className: "text-gray-700",
                  children: "Implementa\xE7\xE3o de recursos avan\xE7ados e otimiza\xE7\xE3o baseada no feedback dos usu\xE1rios."
                })]
              })]
            })]
          })]
        })
      }), /*#__PURE__*/_jsxs("div", {
        className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg w-full max-w-6xl mb-16",
        children: [/*#__PURE__*/_jsx("h2", {
          className: "text-2xl font-bold mb-6 text-[#06202B]",
          children: "Desenvolvedor"
        }), /*#__PURE__*/_jsxs("div", {
          className: "flex flex-col md:flex-row items-center gap-8",
          children: [/*#__PURE__*/_jsx("div", {
            className: "w-32 h-32 rounded-full bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white text-4xl font-bold",
            children: "HP"
          }), /*#__PURE__*/_jsxs("div", {
            className: "flex-1",
            children: [/*#__PURE__*/_jsx("h3", {
              className: "text-xl font-bold text-[#06202B] mb-2",
              children: "Hugo Ot\xE1vio dos Santos de Paula"
            }), /*#__PURE__*/_jsx("p", {
              className: "text-gray-700 mb-4",
              children: "Desenvolvedor Full Stack apaixonado por criar solu\xE7\xF5es que fazem a diferen\xE7a na vida das pessoas."
            }), /*#__PURE__*/_jsxs("div", {
              className: "flex gap-4",
              children: [/*#__PURE__*/_jsxs("a", {
                href: "https://github.com/yourgithub",
                target: "_blank",
                rel: "noopener noreferrer",
                className: "flex items-center gap-2 text-[#06202B] hover:text-[#D4C9BE] transition-colors",
                children: [/*#__PURE__*/_jsx(GithubLogo, {
                  size: 24
                }), "GitHub"]
              }), /*#__PURE__*/_jsxs("a", {
                href: "https://linkedin.com/in/yourprofile",
                target: "_blank",
                rel: "noopener noreferrer",
                className: "flex items-center gap-2 text-[#06202B] hover:text-[#D4C9BE] transition-colors",
                children: [/*#__PURE__*/_jsx(LinkedinLogo, {
                  size: 24
                }), "LinkedIn"]
              })]
            })]
          })]
        })]
      }), /*#__PURE__*/_jsx("div", {
        children: /*#__PURE__*/_jsx("a", {
          href: "/calendar",
          className: "",
          children: /*#__PURE__*/_jsxs(Button, {
            borderRadius: "1.75rem",
            className: "flex gap-2 bg-[#D4C9BE]/50 text-[16px] text-black border-[#06202B]/50 cursor-pointer",
            children: ["Come\xE7ar ", /*#__PURE__*/_jsx(ArrowRight, {
              size: 32
            })]
          })
        })
      })]
    }), /*#__PURE__*/_jsx(Footer, {})]
  });
}
const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(/*#__PURE__*/_jsx(Home, {}));