import { createRoot } from '/node_modules/react-dom/client';
import React from "react";
import { ArrowRight, EnvelopeSimple, Phone, MapPin } from '/node_modules/@phosphor-icons/react';
import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { Button } from './components/buttons/movingBorder';
import { BackgroundGradient } from './components/background-gradient';
import { BackgroundBeams } from './components/background-beams';
import { jsx as _jsx, jsxs as _jsxs, Fragment as _Fragment } from "react/jsx-runtime";
function Contact() {
  const contactMethods = [{
    icon: /*#__PURE__*/_jsx(Phone, {
      className: "h-6 w-6"
    }),
    title: "Telefone",
    description: "+55 (11) 99999-9999",
    href: "tel:+5511999999999"
  }, {
    icon: /*#__PURE__*/_jsx(EnvelopeSimple, {
      className: "h-6 w-6"
    }),
    title: "Email",
    description: "contato@appy.com",
    href: "mailto:contato@appy.com"
  }, {
    icon: /*#__PURE__*/_jsx(MapPin, {
      className: "h-6 w-6"
    }),
    title: "Localização",
    description: "São Paulo, SP",
    href: "https://maps.google.com"
  }];
  return /*#__PURE__*/_jsxs(_Fragment, {
    children: [/*#__PURE__*/_jsx(HeaderCommon, {}), /*#__PURE__*/_jsx("main", {
      className: "relative min-h-screen",
      children: /*#__PURE__*/_jsxs("div", {
        className: "w-full pt-32 pb-16",
        children: [/*#__PURE__*/_jsxs("div", {
          className: "mx-auto w-[80%] text-center mb-16",
          children: [/*#__PURE__*/_jsx("h1", {
            className: "text-5xl md:text-7xl font-bold bg-gradient-to-r from-[#06202B] to-[#D4C9BE] bg-clip-text text-transparent mb-6",
            children: "Entre em Contato"
          }), /*#__PURE__*/_jsx("p", {
            className: "text-gray-700 text-xl max-w-2xl mx-auto",
            children: "Tem alguma d\xFAvida ou sugest\xE3o? Estamos aqui para ajudar! Nossa equipe est\xE1 pronta para atender voc\xEA."
          })]
        }), /*#__PURE__*/_jsx("div", {
          className: "mx-auto w-[80%] grid grid-cols-1 md:grid-cols-3 gap-8 mb-16",
          children: contactMethods.map((method, index) => /*#__PURE__*/_jsx(BackgroundGradient, {
            className: "rounded-[22px] bg-white bg-[#D4C9BE]/10 shadow-lg hover:-translate-y-[2px] hover:bg-[#D4C9BE]/5 hover:shadow-xl duration-150",
            children: /*#__PURE__*/_jsxs("a", {
              href: method.href,
              target: "_blank",
              rel: "noopener noreferrer",
              className: "block flex flex-col items-center text-center p-4 sm:p-10",
              children: [/*#__PURE__*/_jsx("div", {
                className: "w-12 h-12 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white mb-4",
                children: method.icon
              }), /*#__PURE__*/_jsx("h3", {
                className: "text-xl font-semibold mb-2 text-[#06202B]",
                children: method.title
              }), /*#__PURE__*/_jsx("p", {
                className: "text-gray-700",
                children: method.description
              })]
            })
          }, index))
        }), /*#__PURE__*/_jsxs("div", {
          className: "mx-auto w-[80%] max-w-3xl relative",
          children: [/*#__PURE__*/_jsx("div", {
            className: "absolute inset-0 h-full w-full bg-gradient-to-r from-[#06202B]/20 to-[#D4C9BE]/20 transform scale-[0.80] blur-3xl"
          }), /*#__PURE__*/_jsxs("div", {
            className: "relative bg-[#D4C9BE]/10 shadow-lg px-8 py-12 rounded-2xl shadow-xl",
            children: [/*#__PURE__*/_jsx("h2", {
              className: "text-3xl font-bold text-[#06202B] mb-8 text-center",
              children: "Envie sua mensagem"
            }), /*#__PURE__*/_jsxs("form", {
              method: "post",
              action: "/contact",
              className: "space-y-6",
              children: [/*#__PURE__*/_jsxs("div", {
                className: "grid grid-cols-1 md:grid-cols-2 gap-6",
                children: [/*#__PURE__*/_jsxs("div", {
                  children: [/*#__PURE__*/_jsx("label", {
                    htmlFor: "name",
                    className: "block text-sm font-medium text-gray-700 mb-2",
                    children: "Nome"
                  }), /*#__PURE__*/_jsx("input", {
                    type: "text",
                    id: "name",
                    className: "w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                    placeholder: "Seu nome"
                  })]
                }), /*#__PURE__*/_jsxs("div", {
                  children: [/*#__PURE__*/_jsx("label", {
                    htmlFor: "email",
                    className: "block text-sm font-medium text-gray-700 mb-2",
                    children: "Email"
                  }), /*#__PURE__*/_jsx("input", {
                    type: "email",
                    id: "email",
                    className: "w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                    placeholder: "seu@email.com"
                  })]
                })]
              }), /*#__PURE__*/_jsxs("div", {
                children: [/*#__PURE__*/_jsx("label", {
                  htmlFor: "subject",
                  className: "block text-sm font-medium text-gray-700 mb-2",
                  children: "Assunto"
                }), /*#__PURE__*/_jsx("input", {
                  type: "text",
                  id: "subject",
                  className: "w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                  placeholder: "Como podemos ajudar?"
                })]
              }), /*#__PURE__*/_jsxs("div", {
                children: [/*#__PURE__*/_jsx("label", {
                  htmlFor: "message",
                  className: "block text-sm font-medium text-gray-700 mb-2",
                  children: "Mensagem"
                }), /*#__PURE__*/_jsx("textarea", {
                  id: "message",
                  rows: 6,
                  className: "w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                  placeholder: "Escreva sua mensagem aqui..."
                })]
              }), /*#__PURE__*/_jsx("div", {
                className: "text-center",
                children: /*#__PURE__*/_jsxs(Button, {
                  borderRadius: "1.75rem",
                  className: "flex gap-2 px-8 w-fit bg-transparent text-[16px] text-[#06202B] border-[#06202B] hover:bg-[#06202B]/5 transition-colors cursor-pointer",
                  children: ["Enviar Mensagem ", /*#__PURE__*/_jsx(ArrowRight, {
                    size: 24
                  })]
                })
              })]
            })]
          })]
        })]
      })
    }), /*#__PURE__*/_jsx(Footer, {})]
  });
}
const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(/*#__PURE__*/_jsx(Contact, {}));