import { createRoot } from '/node_modules/react-dom/client';
import React from "react";

import CardHome from './components/cardHome';
import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { FlipWords } from "./components/flipWords";
import { Button } from './components/buttons/movingBorder';

import { ArrowRight, GithubLogo, LinkedinLogo } from '/node_modules/@phosphor-icons/react';

function Home() {

    const words = ["sua Vida", "seu Trabalho", "sua Rotina", "suas Tarefas"];
    
    return (
        <>
            <HeaderCommon />            <main className='flex flex-col items-center gap-18 p-6 pt-32 min-h-screen w-[80%] mx-auto'>
                {/* Hero Section */}
                <div className='w-full mb-16'>
                    <div className="flex flex-col gap-6 items-center">
                        <h1 className='text-7xl text-center font-bold bg-gradient-to-r from-[#06202B] to-[#D4C9BE] bg-clip-text text-transparent'>Sobre o Appy</h1>
                        <p className='text-xl text-center text-gray-700 max-w-2xl'>
                            Um assistente pessoal inteligente projetado para simplificar <FlipWords words={words} /> com elegância e eficiência.
                        </p>
                    </div>
                </div>

                {/* Project Description */}
                <div className='grid grid-cols-1 md:grid-cols-2 gap-12 w-full max-w-6xl mb-16'>
                    <div className='bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg'>
                        <h2 className='text-2xl font-bold mb-4 text-[#06202B]'>O Projeto</h2>
                        <p className='text-gray-700 leading-relaxed'>
                            Appy é uma aplicação web moderna que combina o poder do PHP no backend com React no frontend para criar uma experiência fluida e intuitiva. Desenvolvido com foco em produtividade e organização pessoal, o Appy oferece ferramentas essenciais para gerenciar seu dia a dia com eficiência.
                        </p>
                    </div>
                    <div className='bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg'>
                        <h2 className='text-2xl font-bold mb-4 text-[#06202B]'>Tecnologias</h2>
                        <ul className='text-gray-700 space-y-2'>
                            <li>• Backend em PHP com arquitetura MVC</li>
                            <li>• Frontend em React com Tailwind CSS</li>
                            <li>• Sistema de rotas personalizado</li>
                            <li>• Gerenciamento de sessão seguro</li>
                            <li>• Interface moderna e responsiva</li>
                        </ul>
                    </div>
                </div>

                {/* Mission and Goals */}
                <div className='w-full max-w-6xl mb-16'>
                    <div className='bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg'>
                        <h2 className='text-2xl font-bold mb-6 text-[#06202B]'>Missão e Objetivos</h2>
                        <div className='grid grid-cols-1 md:grid-cols-3 gap-8'>
                            <div>
                                <h3 className='text-lg font-semibold text-[#06202B] mb-3'>Simplificar o Dia a Dia</h3>
                                <p className='text-gray-700'>Criar uma ferramenta intuitiva que ajude as pessoas a organizarem suas tarefas diárias, compromissos e metas de forma eficiente e sem complicações.</p>
                            </div>
                            <div>
                                <h3 className='text-lg font-semibold text-[#06202B] mb-3'>Produtividade Inteligente</h3>
                                <p className='text-gray-700'>Oferecer recursos que não apenas organizem, mas também otimizem a forma como as pessoas gerenciam seu tempo e prioridades.</p>
                            </div>
                            <div>
                                <h3 className='text-lg font-semibold text-[#06202B] mb-3'>Acessibilidade</h3>
                                <p className='text-gray-700'>Disponibilizar uma plataforma acessível e adaptável às necessidades de diferentes usuários, independente de sua experiência com tecnologia.</p>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Features */}
                <div className='w-full max-w-6xl mb-16'>
                    <div className='bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg'>
                        <h2 className='text-2xl font-bold mb-6 text-[#06202B]'>Funcionalidades</h2>
                        <div className='grid grid-cols-1 md:grid-cols-2 gap-8'>
                            <div className='flex gap-4'>
                                <div className='w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold'>
                                    1
                                </div>
                                <div>
                                    <h3 className='text-lg font-semibold text-[#06202B] mb-2'>Calendário Inteligente</h3>
                                    <p className='text-gray-700'>Visualize e gerencie seus compromissos com uma interface intuitiva e adaptável às suas necessidades.</p>
                                </div>
                            </div>
                            <div className='flex gap-4'>
                                <div className='w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold'>
                                    2
                                </div>
                                <div>
                                    <h3 className='text-lg font-semibold text-[#06202B] mb-2'>Gerenciamento de Tarefas</h3>
                                    <p className='text-gray-700'>Organize suas tarefas com prioridades, prazos e categorias personalizáveis.</p>
                                </div>
                            </div>
                            <div className='flex gap-4'>
                                <div className='w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold'>
                                    3
                                </div>
                                <div>
                                    <h3 className='text-lg font-semibold text-[#06202B] mb-2'>Análise de Produtividade</h3>
                                    <p className='text-gray-700'>Acompanhe seu progresso e identifique padrões para otimizar sua rotina.</p>
                                </div>
                            </div>
                            <div className='flex gap-4'>
                                <div className='w-12 h-12 shrink-0 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white font-bold'>
                                    4
                                </div>
                                <div>
                                    <h3 className='text-lg font-semibold text-[#06202B] mb-2'>Integração Flexível</h3>
                                    <p className='text-gray-700'>Conecte-se com outras ferramentas e mantenha tudo sincronizado em um só lugar.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Roadmap */}
                <div className='w-full max-w-6xl mb-16'>
                    <div className='bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg'>
                        <h2 className='text-2xl font-bold mb-6 text-[#06202B]'>Roadmap do Projeto</h2>
                        <div className='space-y-6'>
                            <div className='flex gap-4'>
                                <div className='w-24 shrink-0 text-[#06202B] font-semibold'>Fase 1</div>
                                <div className='flex-1 bg-white/50 p-4 rounded-lg'>
                                    <h3 className='font-semibold text-[#06202B] mb-2'>Funcionalidades Básicas</h3>
                                    <p className='text-gray-700'>Implementação do calendário, sistema de tarefas e interface base do usuário.</p>
                                </div>
                            </div>
                            <div className='flex gap-4'>
                                <div className='w-24 shrink-0 text-[#06202B] font-semibold'>Fase 2</div>
                                <div className='flex-1 bg-white/50 p-4 rounded-lg'>
                                    <h3 className='font-semibold text-[#06202B] mb-2'>Análise e Integração</h3>
                                    <p className='text-gray-700'>Adição de recursos analíticos e possibilidade de integração com outras plataformas.</p>
                                </div>
                            </div>
                            <div className='flex gap-4'>
                                <div className='w-24 shrink-0 text-[#06202B] font-semibold'>Fase 3</div>
                                <div className='flex-1 bg-white/50 p-4 rounded-lg'>
                                    <h3 className='font-semibold text-[#06202B] mb-2'>Expansão e Otimização</h3>
                                    <p className='text-gray-700'>Implementação de recursos avançados e otimização baseada no feedback dos usuários.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Developer Section */}
                <div className='bg-[#D4C9BE]/10 p-8 rounded-2xl shadow-lg w-full max-w-6xl mb-16'>
                    <h2 className='text-2xl font-bold mb-6 text-[#06202B]'>Desenvolvedor</h2>
                    <div className='flex flex-col md:flex-row items-center gap-8'>
                        <div className='w-32 h-32 rounded-full overflow-hidden bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white text-4xl font-bold'>
                            <img src="/images/Perfil_2.jpg" alt="" />
                        </div>
                        <div className='flex-1'>
                            <h3 className='text-xl font-bold text-[#06202B] mb-2'>Hugo Otávio dos Santos de Paula</h3>
                            <p className='text-gray-700 mb-4'>Desenvolvedor Full Stack apaixonado por criar soluções que fazem a diferença na vida das pessoas.</p>
                            <div className='flex gap-4'>
                                <a href="https://github.com/yourgithub" target="_blank" rel="noopener noreferrer" className='flex items-center gap-2 text-[#06202B] hover:text-[#D4C9BE] transition-colors'>
                                    <GithubLogo size={24} />
                                    GitHub
                                </a>
                                <a href="https://linkedin.com/in/yourprofile" target="_blank" rel="noopener noreferrer" className='flex items-center gap-2 text-[#06202B] hover:text-[#D4C9BE] transition-colors'>
                                    <LinkedinLogo size={24} />
                                    LinkedIn
                                </a>
                            </div>
                        </div>
                    </div>
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