import { createRoot } from '/node_modules/react-dom/client';
import React from '/node_modules/react';

function Counter() {
  const [count, setCount] = React.useState(0);

  return (
    <div className="flex flex-col items-center justify-center min-h-screen bg-gray-100">
      <div className="p-8 bg-white rounded-lg shadow-md">
        <h1 className="text-4xl font-bold text-gray-800 mb-4">Counter</h1>
        <div className="text-6xl font-bold text-center text-blue-600 mb-6">
          {count}
        </div>
        <div className="flex gap-4">
          <button
            onClick={() => setCount(count - 1)}
            className="px-6 py-2 text-white bg-red-500 rounded-lg hover:bg-red-600 transition-colors"
          >
            -
          </button>
          <button
            onClick={() => setCount(count + 1)} 
            className="px-6 py-2 text-white bg-green-500 rounded-lg hover:bg-green-600 transition-colors"
          >
            +
          </button>
        </div>
      </div>
    </div>
  );
}

const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(<Counter />);
