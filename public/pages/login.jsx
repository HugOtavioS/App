import { createRoot } from '/node_modules/react-dom/client';
import React from "react";
import { ArrowRight, LockSimple, EnvelopeSimple, GoogleLogo } from '/node_modules/@phosphor-icons/react';

import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { Button } from './components/buttons/movingBorder';
import { BackgroundGradient } from './components/background-gradient';
import { TextGenerateEffect } from './components/text-generate-effect';
import { BackgroundBeams } from './components/background-beams';

function Login() {
    const words = "Bem-vindo de volta ao Appy! Entre e continue organizando sua vida com simplicidade.";

    return (
        <>
            <HeaderCommon />

            <main className="relative min-h-screen w-full pt-32 pb-16">
                <div className="mx-auto w-full max-w-7xl relative z-10">
                    {/* Login Container */}
                    <div className="flex flex-col md:flex-row gap-8 items-center justify-center px-8">
                        {/* Right Column - Login Form */}
                        <div className="w-full md:w-1/2 max-w-md">
                            <div className="relative">
                                <div className="absolute inset-0 h-full w-full bg-gradient-to-r from-[#06202B]/20 to-[#D4C9BE]/20 transform scale-[0.80] blur-3xl" />
                                <div className="relative bg-[#D4C9BE]/10 px-8 py-12 rounded-2xl shadow-xl">
                                    <h2 className="text-3xl font-bold text-[#06202B] mb-8 text-center">Login</h2>
                                    
                                    {/* Social Login */}
                                    <div className="mb-8">
                                        <button className="w-full flex items-center justify-center gap-2 bg-white text-[#06202B] border-2 border-[#06202B] rounded-lg px-4 py-3 font-medium hover:bg-[#06202B] hover:text-white transition-colors">
                                            <GoogleLogo size={24} />
                                            Continuar com Google
                                        </button>
                                    </div>

                                    <div className="relative mb-8">
                                        <div className="absolute inset-0 flex items-center">
                                            <div className="w-full border-t border-gray-300"></div>
                                        </div>
                                        <div className="relative flex justify-center text-sm">
                                            <span className="px-2 text-gray-800">ou</span>
                                        </div>
                                    </div>

                                    {/* Login Form */}
                                    <form method='POST' action="/login" className="space-y-6">
                                        <div>
                                            <label htmlFor="email" className="block text-sm font-medium text-gray-700 mb-2">
                                                Email
                                            </label>
                                            <div className="relative">
                                                <div className="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <EnvelopeSimple className="h-5 w-5 text-gray-400" />
                                                </div>
                                                <input
                                                    type="email"
                                                    id="email"
                                                    className="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                                    placeholder="seu@email.com"
                                                />
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <label htmlFor="password" className="block text-sm font-medium text-gray-700 mb-2">
                                                Senha
                                            </label>
                                            <div className="relative">
                                                <div className="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <LockSimple className="h-5 w-5 text-gray-400" />
                                                </div>
                                                <input
                                                    type="password"
                                                    id="password"
                                                    className="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                                    placeholder="********"
                                                />
                                            </div>
                                        </div>

                                        <div className="flex items-center justify-between">
                                            <div className="flex items-center">
                                                <input
                                                    id="remember-me"
                                                    type="checkbox"
                                                    className="h-4 w-4 text-[#06202B] focus:ring-[#06202B] cursor-pointer border-gray-300 rounded"
                                                />
                                                <label htmlFor="remember-me" className="ml-2 block text-sm text-gray-700">
                                                    Lembrar-me
                                                </label>
                                            </div>
                                            <a href="#" className="text-sm text-[#06202B]">
                                                Esqueceu a senha?
                                            </a>
                                        </div>
                                        
                                        <div>
                                            <Button
                                                borderRadius="0.75rem"
                                                className="w-full flex gap-2 justify-center bg-[#06202B] text-[16px] text-white border-[#06202B] hover:bg-[#06202B]/90 transition-colors cursor-pointer"
                                            >
                                                Entrar <ArrowRight size={24} />
                                            </Button>
                                        </div>
                                    </form>

                                    <p className="mt-6 text-center text-sm text-gray-600">
                                        Não tem uma conta?{' '}
                                        <a href="/register" className="text-[#06202B] font-medium">
                                            Criar conta
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <BackgroundBeams className="opacity-20" />
            </main>

            <Footer />
        </>
    );
}

const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(<Login />);
