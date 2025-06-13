import React from '/node_modules/react';

function HeaderCommon() {
    return (
        <header className="fixed flex justify-center items-center gap-1 top-3 left-[50%] -translate-x-[50%] bg-[#D4C9BE]/50 backdrop-blur backdrop-saturate-10 z-100 rounded-3xl w-fit px-10 p-6">
            <nav>
                <ul className="flex gap-4">
                    <li><a href="/" className='hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200'>Início</a></li>
                    <li><a href="/about" className='hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200'>Sobre</a></li>
                    <li><a href="/contact" className='hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200'>Contato</a></li>
                    <li><a href="/login" className='hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200'>Entrar</a></li>
                    <li><a href="/register" className='hover:bg-[#F1EFEC]/75 p-1 px-4 rounded-lg duration-200'>Registrar</a></li>
                </ul>
            </nav>
        </header>
    );
}

export default HeaderCommon;