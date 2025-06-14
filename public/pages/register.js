import { createRoot } from '/node_modules/react-dom/client';
import React, { useState } from "react";
import { ArrowRight, LockSimple, EnvelopeSimple, User, GoogleLogo } from '/node_modules/@phosphor-icons/react';
import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { Button } from './components/buttons/movingBorder';
import { BackgroundGradient } from './components/background-gradient';
import { TextGenerateEffect } from './components/text-generate-effect';
import { BackgroundBeams } from './components/background-beams';
import { jsx as _jsx, jsxs as _jsxs, Fragment as _Fragment } from "react/jsx-runtime";
function Register() {
  const words = "Comece sua jornada para uma vida mais organizada e produtiva com o Appy.";
  const [passwordMatch, setPasswordMatch] = useState(true);
  const handlePasswordConfirm = e => {
    const password = document.getElementById('password').value;
    setPasswordMatch(e.target.value === password);
  };
  return /*#__PURE__*/_jsxs(_Fragment, {
    children: [/*#__PURE__*/_jsx(HeaderCommon, {}), /*#__PURE__*/_jsxs("main", {
      className: "relative min-h-screen w-full pt-32 pb-16",
      children: [/*#__PURE__*/_jsx("div", {
        className: "mx-auto w-full max-w-7xl relative z-10",
        children: /*#__PURE__*/_jsxs("div", {
          className: "flex flex-col md:flex-row gap-8 items-center justify-center px-8",
          children: [/*#__PURE__*/_jsx("div", {
            className: "w-full md:w-1/2 max-w-md",
            children: /*#__PURE__*/_jsxs("div", {
              className: "relative",
              children: [/*#__PURE__*/_jsx("div", {
                className: "absolute inset-0 h-full w-full bg-gradient-to-r from-[#06202B]/20 to-[#D4C9BE]/20 transform scale-[0.80] blur-3xl"
              }), /*#__PURE__*/_jsxs("div", {
                className: "relative bg-[#D4C9BE]/10 px-8 py-12 rounded-2xl shadow-xl",
                children: [/*#__PURE__*/_jsx("h2", {
                  className: "text-3xl font-bold text-[#06202B] mb-8 text-center",
                  children: "Criar Conta"
                }), /*#__PURE__*/_jsx("div", {
                  className: "mb-8",
                  children: /*#__PURE__*/_jsxs("button", {
                    className: "w-full flex items-center justify-center gap-2 bg-white text-[#06202B] border-2 border-[#06202B] rounded-lg px-4 py-3 font-medium hover:bg-[#06202B] hover:text-white transition-colors",
                    children: [/*#__PURE__*/_jsx(GoogleLogo, {
                      size: 24
                    }), "Cadastrar com Google"]
                  })
                }), /*#__PURE__*/_jsxs("div", {
                  className: "relative mb-8",
                  children: [/*#__PURE__*/_jsx("div", {
                    className: "absolute inset-0 flex items-center",
                    children: /*#__PURE__*/_jsx("div", {
                      className: "w-full border-t border-gray-300"
                    })
                  }), /*#__PURE__*/_jsx("div", {
                    className: "relative flex justify-center text-sm",
                    children: /*#__PURE__*/_jsx("span", {
                      className: "px-2 text-gray-800",
                      children: "ou"
                    })
                  })]
                }), /*#__PURE__*/_jsxs("form", {
                  method: "POST",
                  action: "/register",
                  className: "space-y-6",
                  children: [/*#__PURE__*/_jsxs("div", {
                    children: [/*#__PURE__*/_jsx("label", {
                      htmlFor: "name",
                      className: "block text-sm font-medium text-gray-700 mb-2",
                      children: "Nome Completo"
                    }), /*#__PURE__*/_jsxs("div", {
                      className: "relative",
                      children: [/*#__PURE__*/_jsx("div", {
                        className: "absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none",
                        children: /*#__PURE__*/_jsx(User, {
                          className: "h-5 w-5 text-gray-400"
                        })
                      }), /*#__PURE__*/_jsx("input", {
                        type: "text",
                        id: "name",
                        name: "name",
                        required: true,
                        className: "w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                        placeholder: "Seu nome completo"
                      })]
                    })]
                  }), /*#__PURE__*/_jsxs("div", {
                    children: [/*#__PURE__*/_jsx("label", {
                      htmlFor: "email",
                      className: "block text-sm font-medium text-gray-700 mb-2",
                      children: "Email"
                    }), /*#__PURE__*/_jsxs("div", {
                      className: "relative",
                      children: [/*#__PURE__*/_jsx("div", {
                        className: "absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none",
                        children: /*#__PURE__*/_jsx(EnvelopeSimple, {
                          className: "h-5 w-5 text-gray-400"
                        })
                      }), /*#__PURE__*/_jsx("input", {
                        type: "email",
                        id: "email",
                        name: "email",
                        required: true,
                        className: "w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                        placeholder: "seu@email.com"
                      })]
                    })]
                  }), /*#__PURE__*/_jsxs("div", {
                    children: [/*#__PURE__*/_jsx("label", {
                      htmlFor: "password",
                      className: "block text-sm font-medium text-gray-700 mb-2",
                      children: "Senha"
                    }), /*#__PURE__*/_jsxs("div", {
                      className: "relative",
                      children: [/*#__PURE__*/_jsx("div", {
                        className: "absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none",
                        children: /*#__PURE__*/_jsx(LockSimple, {
                          className: "h-5 w-5 text-gray-400"
                        })
                      }), /*#__PURE__*/_jsx("input", {
                        type: "password",
                        id: "password",
                        name: "password",
                        required: true,
                        className: "w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                        placeholder: "M\xEDnimo 8 caracteres",
                        minLength: 8
                      })]
                    })]
                  }), /*#__PURE__*/_jsxs("div", {
                    children: [/*#__PURE__*/_jsx("label", {
                      htmlFor: "password_confirm",
                      className: "block text-sm font-medium text-gray-700 mb-2",
                      children: "Confirmar Senha"
                    }), /*#__PURE__*/_jsxs("div", {
                      className: "relative",
                      children: [/*#__PURE__*/_jsx("div", {
                        className: "absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none",
                        children: /*#__PURE__*/_jsx(LockSimple, {
                          className: "h-5 w-5 text-gray-400"
                        })
                      }), /*#__PURE__*/_jsx("input", {
                        type: "password",
                        id: "password_confirm",
                        required: true,
                        className: `w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border focus:ring-2 focus:ring-[#06202B] focus:border-transparent ${passwordMatch ? 'border-gray-300' : 'border-red-500'}`,
                        placeholder: "Digite a senha novamente",
                        onChange: handlePasswordConfirm,
                        minLength: 8
                      })]
                    }), !passwordMatch && /*#__PURE__*/_jsx("p", {
                      className: "mt-1 text-sm text-red-500",
                      children: "As senhas n\xE3o coincidem"
                    })]
                  }), /*#__PURE__*/_jsxs("div", {
                    className: "flex items-center",
                    children: [/*#__PURE__*/_jsx("input", {
                      id: "terms",
                      type: "checkbox",
                      required: true,
                      className: "h-4 w-4 text-[#06202B] focus:ring-[#06202B] cursor-pointer border-gray-300 rounded"
                    }), /*#__PURE__*/_jsxs("label", {
                      htmlFor: "terms",
                      className: "ml-2 block text-sm text-gray-700",
                      children: ["Eu concordo com os", ' ', /*#__PURE__*/_jsx("a", {
                        href: "/terms",
                        className: "text-[#06202B] hover:underline",
                        children: "Termos de Uso"
                      }), ' ', "e", ' ', /*#__PURE__*/_jsx("a", {
                        href: "/privacy",
                        className: "text-[#06202B] hover:underline",
                        children: "Pol\xEDtica de Privacidade"
                      })]
                    })]
                  }), /*#__PURE__*/_jsx("div", {
                    children: /*#__PURE__*/_jsxs(Button, {
                      borderRadius: "0.75rem",
                      className: "w-full flex gap-2 justify-center bg-[#06202B] text-[16px] text-white border-[#06202B] hover:bg-[#06202B]/90 transition-colors cursor-pointer",
                      children: ["Criar Conta ", /*#__PURE__*/_jsx(ArrowRight, {
                        size: 24
                      })]
                    })
                  })]
                }), /*#__PURE__*/_jsxs("p", {
                  className: "mt-6 text-center text-sm text-gray-600",
                  children: ["J\xE1 tem uma conta?", ' ', /*#__PURE__*/_jsx("a", {
                    href: "/login",
                    className: "text-[#06202B] font-medium",
                    children: "Fazer login"
                  })]
                })]
              })]
            })
          }), /*#__PURE__*/_jsxs("div", {
            className: "w-full md:w-1/2 max-w-md",
            children: [/*#__PURE__*/_jsx("div", {
              className: "mb-8",
              children: /*#__PURE__*/_jsx(TextGenerateEffect, {
                words: words,
                className: "text-2xl font-semibold text-[#06202B]"
              })
            }), /*#__PURE__*/_jsxs("div", {
              className: "mt-8 space-y-4",
              children: [/*#__PURE__*/_jsx("h3", {
                className: "text-xl font-semibold text-[#06202B] mb-4",
                children: "Com o Appy voc\xEA pode:"
              }), ["Organizar suas tarefas de forma inteligente", "Acompanhar seu progresso diário", "Sincronizar seus compromissos", "Personalizar sua experiência"].map((feature, index) => /*#__PURE__*/_jsxs("div", {
                className: "flex items-center gap-2 text-gray-700",
                children: [/*#__PURE__*/_jsx("div", {
                  className: "w-1.5 h-1.5 rounded-full bg-[#06202B]"
                }), feature]
              }, index))]
            }), /*#__PURE__*/_jsx(BackgroundGradient, {
              className: "rounded-[22px] p-4 sm:p-10",
              children: /*#__PURE__*/_jsx("img", {
                src: "/images/prancheta.png",
                alt: "Register Illustration",
                className: "w-full h-auto rounded-lg"
              })
            })]
          })]
        })
      }), /*#__PURE__*/_jsx(BackgroundBeams, {
        className: "opacity-20"
      })]
    }), /*#__PURE__*/_jsx(Footer, {})]
  });
}
const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(/*#__PURE__*/_jsx(Register, {}));