import { createRoot } from '/node_modules/react-dom/client';
import React from '/node_modules/react';
import { jsx as _jsx, jsxs as _jsxs } from "react/jsx-runtime";
function Counter() {
  const [count, setCount] = React.useState(0);
  return /*#__PURE__*/_jsx("div", {
    className: "flex flex-col items-center justify-center min-h-screen bg-gray-100",
    children: /*#__PURE__*/_jsxs("div", {
      className: "p-8 bg-white rounded-lg shadow-md",
      children: [/*#__PURE__*/_jsx("h1", {
        className: "text-4xl font-bold text-gray-800 mb-4",
        children: "Counter"
      }), /*#__PURE__*/_jsx("div", {
        className: "text-6xl font-bold text-center text-blue-600 mb-6",
        children: count
      }), /*#__PURE__*/_jsxs("div", {
        className: "flex gap-4",
        children: [/*#__PURE__*/_jsx("button", {
          onClick: () => setCount(count - 1),
          className: "px-6 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 transition-colors",
          children: "-"
        }), /*#__PURE__*/_jsx("button", {
          onClick: () => setCount(count + 1),
          className: "px-6 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600 transition-colors",
          children: "+"
        })]
      })]
    })
  });
}
const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(/*#__PURE__*/_jsx(Counter, {}));