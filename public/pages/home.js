import { createRoot } from '/node_modules/react-dom/client';
import React from "react";
import CardHome from './components/cardHome';
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
      className: "flex flex-col items-center gap-18 p-6 pt-48 min-h-screen w-[80%] mx-auto",
      children: [/*#__PURE__*/_jsx("div", {
        className: "w-full",
        children: /*#__PURE__*/_jsxs("div", {
          className: "flex flex-col gap-1",
          children: [/*#__PURE__*/_jsx("h1", {
            className: "text-7xl text-center font-bold",
            children: "Appy"
          }), /*#__PURE__*/_jsxs("h2", {
            className: "text-xl text-center",
            children: ["Gerencie", /*#__PURE__*/_jsx(FlipWords, {
              words: words
            })]
          })]
        })
      }), /*#__PURE__*/_jsxs("div", {
        className: "grid grid-cols-1 gap-4 w-208",
        children: [/*#__PURE__*/_jsx(CardHome, {
          contentBody: "Appy é um sistema de gerenciamento de rotina projetado para ser simples, intuitivo e livre de poluição visual. Ele oferece apenas os recursos essenciais, sem abrir mão da robustez e da complexidade necessárias para uma gestão eficiente do dia a dia."
        }), /*#__PURE__*/_jsx(CardHome, {
          contentBody: "Appy é um sistema de gerenciamento de rotina projetado para ser simples, intuitivo e livre de poluição visual. Ele oferece apenas os recursos essenciais, sem abrir mão da robustez e da complexidade necessárias para uma gestão eficiente do dia a dia.",
          className: "justify-self-end"
        }), /*#__PURE__*/_jsx(CardHome, {
          contentBody: "Appy é um sistema de gerenciamento de rotina projetado para ser simples, intuitivo e livre de poluição visual. Ele oferece apenas os recursos essenciais, sem abrir mão da robustez e da complexidade necessárias para uma gestão eficiente do dia a dia."
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