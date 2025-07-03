import { createRoot } from '/node_modules/react-dom/client';
import React, { useEffect, useState } from "react";
import { ArrowRight, LockSimple, EnvelopeSimple, GoogleLogo, WarningCircle } from '/node_modules/@phosphor-icons/react';
import axios from "/node_modules/axios";
import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { Button } from './components/buttons/movingBorder';
import { BackgroundGradient } from './components/background-gradient';
import { TextGenerateEffect } from './components/text-generate-effect';
import { BackgroundBeams } from './components/background-beams';
import { jsx as _jsx, jsxs as _jsxs, Fragment as _Fragment } from "react/jsx-runtime";
function Login() {
  const words = "Bem-vindo de volta ao Appy! Entre e continue organizando sua vida com simplicidade.";
  const [resForm, setResForm] = useState({
    email: "",
    password: "",
    statusLogin: ""
  });
  const errors = {
    passUndefined: "Digite a sua senha!",
    emailUndefined: "Digite seu email!",
    userNotFound: "Nenhum usuário encontrado!",
    userFound: "Nenhum encontrado! Redirecionando..."
  };
  const viewErrors = {
    passUndefined: /*#__PURE__*/_jsxs("div", {
      className: "mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2",
      children: [/*#__PURE__*/_jsx(WarningCircle, {
        size: 24
      }), /*#__PURE__*/_jsx("span", {
        children: errors.passUndefined
      })]
    }),
    emailUndefined: /*#__PURE__*/_jsxs("div", {
      className: "mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2",
      children: [/*#__PURE__*/_jsx(WarningCircle, {
        size: 24
      }), /*#__PURE__*/_jsx("span", {
        children: errors.emailUndefined
      })]
    }),
    userNotFound: /*#__PURE__*/_jsxs("div", {
      className: "mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2",
      children: [/*#__PURE__*/_jsx(WarningCircle, {
        size: 24
      }), /*#__PURE__*/_jsx("span", {
        children: errors.userNotFound
      })]
    }),
    userFound: /*#__PURE__*/_jsxs("div", {
      className: "mt-2 text-sm text-green-600 bg-green-100/75 border border-freen-300 rounded-lg px-3 py-2 flex items-center gap-2",
      children: [/*#__PURE__*/_jsx(WarningCircle, {
        size: 24
      }), /*#__PURE__*/_jsx("span", {
        children: errors.userFound
      })]
    })
  };
  const handleForm = async event => {
    event.preventDefault();
    const formEmail = event.target.email.value;
    const formPassword = event.target.password.value;
    setResForm(prev => ({
      ...prev,
      statusLogin: ""
    }));
    if (formEmail == "") {
      setResForm(prev => ({
        ...prev,
        email: "false"
      }));
    } else {
      setResForm(prev => ({
        ...prev,
        email: "true"
      }));
    }
    if (formPassword == "") {
      setResForm(prev => ({
        ...prev,
        password: "false"
      }));
    } else {
      setResForm(prev => ({
        ...prev,
        password: "true"
      }));
    }
    if (formEmail == "" || formPassword == "") {
      return;
    }
    await axios.post("/api/login", {
      email: formEmail,
      password: formPassword
    }, {
      headers: {
        'Content-Type': 'multipart/form-data'
      }
    }).then(function (response) {
      if (response.data == "false") {
        setResForm(prev => ({
          ...prev,
          statusLogin: "false"
        }));
      } else {
        setResForm(prev => ({
          ...prev,
          statusLogin: "true"
        }));
      }
    });
  };
  return /*#__PURE__*/_jsxs(_Fragment, {
    children: [/*#__PURE__*/_jsx(HeaderCommon, {}), /*#__PURE__*/_jsxs("main", {
      className: "relative min-h-screen w-full pt-32 pb-16",
      children: [/*#__PURE__*/_jsx("div", {
        className: "mx-auto w-full max-w-7xl relative z-10",
        children: /*#__PURE__*/_jsx("div", {
          className: "flex flex-col md:flex-row gap-8 items-center justify-center px-8",
          children: /*#__PURE__*/_jsx("div", {
            className: "w-full md:w-1/2 max-w-md",
            children: /*#__PURE__*/_jsxs("div", {
              className: "relative",
              children: [/*#__PURE__*/_jsx("div", {
                className: "absolute inset-0 h-full w-full bg-gradient-to-r from-[#06202B]/20 to-[#D4C9BE]/20 transform scale-[0.80] blur-3xl"
              }), /*#__PURE__*/_jsxs("div", {
                className: "relative bg-[#D4C9BE]/10 px-8 py-12 rounded-2xl shadow-xl",
                children: [/*#__PURE__*/_jsx("h2", {
                  className: "text-3xl font-bold text-[#06202B] mb-8 text-center",
                  children: "Login"
                }), /*#__PURE__*/_jsx("div", {
                  className: "mb-8",
                  children: /*#__PURE__*/_jsxs("button", {
                    className: "w-full flex items-center justify-center gap-2 bg-white text-[#06202B] border-2 border-[#06202B] rounded-lg cursor-pointer px-4 py-3 font-medium hover:bg-[#06202B] hover:text-white transition-colors",
                    children: [/*#__PURE__*/_jsx(GoogleLogo, {
                      size: 24
                    }), "Continuar com Google"]
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
                  onSubmit: event => {
                    handleForm(event);
                  },
                  className: "space-y-6",
                  children: [resForm.statusLogin == "false" && viewErrors["userNotFound"], resForm.statusLogin == "true" && viewErrors["userFound"], /*#__PURE__*/_jsxs("div", {
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
                        className: "w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                        placeholder: "seu@email.com"
                      })]
                    }), resForm.email == "false" && viewErrors["emailUndefined"]]
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
                        className: "w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent",
                        placeholder: "********"
                      })]
                    }), resForm.password == "false" && viewErrors["passUndefined"]]
                  }), /*#__PURE__*/_jsxs("div", {
                    className: "flex items-center justify-between",
                    children: [/*#__PURE__*/_jsxs("div", {
                      className: "flex items-center",
                      children: [/*#__PURE__*/_jsx("input", {
                        id: "remember-me",
                        type: "checkbox",
                        className: "h-4 w-4 text-[#06202B] focus:ring-[#06202B] cursor-pointer border-gray-300 rounded"
                      }), /*#__PURE__*/_jsx("label", {
                        htmlFor: "remember-me",
                        className: "ml-2 block text-sm text-gray-700",
                        children: "Lembrar-me"
                      })]
                    }), /*#__PURE__*/_jsx("a", {
                      href: "#",
                      className: "text-sm text-[#06202B]",
                      children: "Esqueceu a senha?"
                    })]
                  }), /*#__PURE__*/_jsx("div", {
                    children: /*#__PURE__*/_jsxs(Button, {
                      borderRadius: "0.75rem",
                      className: "w-full flex gap-2 justify-center bg-[#06202B] text-[16px] text-white border-[#06202B] hover:bg-[#06202B]/90 transition-colors cursor-pointer",
                      children: ["Entrar ", /*#__PURE__*/_jsx(ArrowRight, {
                        size: 24
                      })]
                    })
                  })]
                }), /*#__PURE__*/_jsxs("p", {
                  className: "mt-6 text-center text-sm text-gray-600",
                  children: ["N\xE3o tem uma conta?", ' ', /*#__PURE__*/_jsx("a", {
                    href: "/register",
                    className: "text-[#06202B] font-medium",
                    children: "Criar conta"
                  })]
                })]
              })]
            })
          })
        })
      }), /*#__PURE__*/_jsx(BackgroundBeams, {
        className: "opacity-20"
      })]
    }), /*#__PURE__*/_jsx(Footer, {})]
  });
}
const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(/*#__PURE__*/_jsx(Login, {}));