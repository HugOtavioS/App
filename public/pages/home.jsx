import { createRoot } from '/node_modules/react-dom/client';
import React from "react";

import CardHome from './components/cardHome';
import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { FlipWords } from "./components/flipWords";
import { Button } from './components/buttons/movingBorder';

import { ArrowRight } from '/node_modules/@phosphor-icons/react';

function Home() {

    const words = ["sua Vida", "seu Trabalho", "sua Rotina", "suas Tarefas"];
    
    return (
        <>
            <HeaderCommon />

            <main className='flex flex-col items-center gap-18 p-6 pt-48 min-h-screen w-[80%] mx-auto'>
                <div className='w-full'>
                    <div className="flex flex-col gap-1">
                        <h1 className='text-7xl text-center font-bold'>Appy</h1>
                        <h2 className='text-xl text-center'>Gerencie<FlipWords words={words} /></h2>
                    </div>
                </div>
                <div className='grid grid-cols-1 gap-4 w-208'>
                    <CardHome
                        contentBody={"Appy é um sistema de gerenciamento de rotina projetado para ser simples, intuitivo e livre de poluição visual. Ele oferece apenas os recursos essenciais, sem abrir mão da robustez e da complexidade necessárias para uma gestão eficiente do dia a dia."}
                    />
                    
                    <CardHome
                        contentBody={"Appy é um sistema de gerenciamento de rotina projetado para ser simples, intuitivo e livre de poluição visual. Ele oferece apenas os recursos essenciais, sem abrir mão da robustez e da complexidade necessárias para uma gestão eficiente do dia a dia."}

                        className={"justify-self-end"}
                    />

                    <CardHome
                        contentBody={"Appy é um sistema de gerenciamento de rotina projetado para ser simples, intuitivo e livre de poluição visual. Ele oferece apenas os recursos essenciais, sem abrir mão da robustez e da complexidade necessárias para uma gestão eficiente do dia a dia."}
                    />
                </div>
                <div>
                    <a href="/calendar" className=''> 
                        <Button
                            borderRadius="1.75rem"
                            className="flex gap-2 bg-[#D4C9BE]/50 text-[16px] text-black border-[#06202B]/50 cursor-pointer"
                        >
                            Começar <ArrowRight size={32} />
                        </Button>
                    </a>
                </div>
            </main>

            <Footer />
        </>
    );
}

const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(<Home />);