import { createRoot } from '/node_modules/react-dom/client';
import React from "react";
import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { FlipWords } from "./components/flipWords";
import { Button } from './components/buttons/movingBorder';
import { ArrowRight } from '/node_modules/@phosphor-icons/react';
import { jsx as _jsx, jsxs as _jsxs, Fragment as _Fragment } from "react/jsx-runtime";
function Home() {
  const words = ["sua Vida", "seu Trabalho", "sua Rotina", "suas Tarefas"];
  return /*#__PURE__*/_jsxs(_Fragment, {
    children: [/*#__PURE__*/_jsx(HeaderCommon, {}), /*#__PURE__*/_jsxs("main", {
      className: "flex flex-col items-center min-h-screen",
      children: [/*#__PURE__*/_jsx("div", {
        className: "w-full bg-gradient-to-b from-[#D4C9BE]/10 to-transparent py-32 mb-24",
        children: /*#__PURE__*/_jsxs("div", {
          className: "w-[80%] mx-auto text-center",
          children: [/*#__PURE__*/_jsx("h1", {
            className: "text-7xl font-bold mb-6 bg-gradient-to-r from-[#06202B] to-[#D4C9BE] bg-clip-text text-transparent",
            children: "Appy"
          }), /*#__PURE__*/_jsxs("h2", {
            className: "text-2xl mb-8",
            children: ["Gerencie ", /*#__PURE__*/_jsx(FlipWords, {
              words: words
            }), " com simplicidade"]
          }), /*#__PURE__*/_jsx("p", {
            className: "text-gray-700 max-w-2xl mx-auto mb-12",
            children: "Seu assistente pessoal para uma vida mais organizada e produtiva. Simplifique sua rotina com as ferramentas certas no momento certo."
          }), /*#__PURE__*/_jsxs("div", {
            className: "flex gap-6 justify-center",
            children: [/*#__PURE__*/_jsx("a", {
              href: "/calendar",
              children: /*#__PURE__*/_jsxs(Button, {
                borderRadius: "1.75rem",
                className: "flex gap-2 px-8 w-fit bg-transparent text-[16px] text-[#06202B] border-[#06202B] hover:bg-[#06202B]/5 transition-colors cursor-pointer",
                children: ["Come\xE7ar Agora ", /*#__PURE__*/_jsx(ArrowRight, {
                  size: 24
                })]
              })
            }), /*#__PURE__*/_jsx("a", {
              href: "/about",
              children: /*#__PURE__*/_jsx(Button, {
                borderRadius: "1.75rem",
                className: "flex gap-2 bg-[#06202B] text-[16px] text-white border-[#06202B] hover:bg-[#06202B]/90 transition-colors cursor-pointer",
                children: "Saiba Mais"
              })
            })]
          })]
        })
      }), /*#__PURE__*/_jsxs("div", {
        className: "w-[80%] mx-auto mb-24",
        children: [/*#__PURE__*/_jsx("h2", {
          className: "text-3xl font-bold text-center text-[#06202B] mb-12",
          children: "Por que escolher o Appy?"
        }), /*#__PURE__*/_jsxs("div", {
          className: "grid grid-cols-1 md:grid-cols-3 gap-8",
          children: [/*#__PURE__*/_jsxs("div", {
            className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg hover:transform hover:scale-105 transition-transform",
            children: [/*#__PURE__*/_jsx("div", {
              className: "w-12 h-12 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white mb-4",
              children: /*#__PURE__*/_jsx("svg", {
                xmlns: "http://www.w3.org/2000/svg",
                className: "h-6 w-6",
                fill: "none",
                viewBox: "0 0 24 24",
                stroke: "currentColor",
                children: /*#__PURE__*/_jsx("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M13 10V3L4 14h7v7l9-11h-7z"
                })
              })
            }), /*#__PURE__*/_jsx("h3", {
              className: "text-xl font-semibold mb-2 text-[#06202B]",
              children: "Simplicidade Poderosa"
            }), /*#__PURE__*/_jsx("p", {
              className: "text-gray-700",
              children: "Interface intuitiva que elimina distra\xE7\xF5es e prioriza o que realmente importa: sua produtividade."
            })]
          }), /*#__PURE__*/_jsxs("div", {
            className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg hover:transform hover:scale-105 transition-transform",
            children: [/*#__PURE__*/_jsx("div", {
              className: "w-12 h-12 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white mb-4",
              children: /*#__PURE__*/_jsx("svg", {
                xmlns: "http://www.w3.org/2000/svg",
                className: "h-6 w-6",
                fill: "none",
                viewBox: "0 0 24 24",
                stroke: "currentColor",
                children: /*#__PURE__*/_jsx("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                })
              })
            }), /*#__PURE__*/_jsx("h3", {
              className: "text-xl font-semibold mb-2 text-[#06202B]",
              children: "Gest\xE3o Eficiente"
            }), /*#__PURE__*/_jsx("p", {
              className: "text-gray-700",
              children: "Organize suas tarefas e compromissos com facilidade, mantendo o foco no que precisa ser feito."
            })]
          }), /*#__PURE__*/_jsxs("div", {
            className: "bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg hover:transform hover:scale-105 transition-transform",
            children: [/*#__PURE__*/_jsx("div", {
              className: "w-12 h-12 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white mb-4",
              children: /*#__PURE__*/_jsx("svg", {
                xmlns: "http://www.w3.org/2000/svg",
                className: "h-6 w-6",
                fill: "none",
                viewBox: "0 0 24 24",
                stroke: "currentColor",
                children: /*#__PURE__*/_jsx("path", {
                  strokeLinecap: "round",
                  strokeLinejoin: "round",
                  strokeWidth: 2,
                  d: "M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"
                })
              })
            }), /*#__PURE__*/_jsx("h3", {
              className: "text-xl font-semibold mb-2 text-[#06202B]",
              children: "Insights Valiosos"
            }), /*#__PURE__*/_jsx("p", {
              className: "text-gray-700",
              children: "Acompanhe seu progresso e descubra padr\xF5es que podem ajudar a otimizar sua rotina."
            })]
          })]
        })]
      }), /*#__PURE__*/_jsx("div", {
        className: "w-full bg-[#06202B] text-white py-24 mb-24",
        children: /*#__PURE__*/_jsxs("div", {
          className: "w-[80%] mx-auto",
          children: [/*#__PURE__*/_jsx("h2", {
            className: "text-3xl font-bold text-center mb-16",
            children: "Como o Appy funciona"
          }), /*#__PURE__*/_jsx("div", {
            className: "grid grid-cols-1 md:grid-cols-4 gap-8",
            children: [{
              step: '01',
              title: 'Crie sua conta',
              desc: 'Comece em segundos com um processo simples de registro'
            }, {
              step: '02',
              title: 'Configure seu espaço',
              desc: 'Personalize as configurações de acordo com suas necessidades'
            }, {
              step: '03',
              title: 'Adicione suas tarefas',
              desc: 'Organize seus compromissos e metas de forma intuitiva'
            }, {
              step: '04',
              title: 'Acompanhe seu progresso',
              desc: 'Visualize seu desempenho e faça ajustes quando necessário'
            }].map((item, index) => /*#__PURE__*/_jsxs("div", {
              className: "text-center",
              children: [/*#__PURE__*/_jsx("div", {
                className: "text-[#D4C9BE] text-4xl font-bold mb-4",
                children: item.step
              }), /*#__PURE__*/_jsx("h3", {
                className: "text-xl font-semibold mb-2",
                children: item.title
              }), /*#__PURE__*/_jsx("p", {
                className: "text-gray-300",
                children: item.desc
              })]
            }, index))
          })]
        })
      }), /*#__PURE__*/_jsx("div", {
        className: "w-[80%] mx-auto mb-24",
        children: /*#__PURE__*/_jsxs("div", {
          className: "bg-[#D4C9BE]/10 p-12 rounded-2xl shadow-lg text-center",
          children: [/*#__PURE__*/_jsx("h2", {
            className: "text-3xl font-bold text-[#06202B] mb-6",
            children: "Pronto para come\xE7ar?"
          }), /*#__PURE__*/_jsx("p", {
            className: "text-gray-700 max-w-2xl mx-auto mb-8",
            children: "Junte-se a milhares de usu\xE1rios que j\xE1 est\xE3o transformando sua forma de organizar o dia a dia. Comece agora mesmo, gratuitamente!"
          }), /*#__PURE__*/_jsx("a", {
            href: "/calendar",
            children: /*#__PURE__*/_jsxs(Button, {
              borderRadius: "1.75rem",
              className: "flex gap-2 px-8 w-fit bg-[#06202B] text-[16px] text-[#F1EFEC] border-[#F1EFEC] transition-colors cursor-pointer",
              children: ["Come\xE7ar Agora ", /*#__PURE__*/_jsx(ArrowRight, {
                size: 24
              })]
            })
          })]
        })
      })]
    }), /*#__PURE__*/_jsx(Footer, {})]
  });
}
const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(/*#__PURE__*/_jsx(Home, {}));