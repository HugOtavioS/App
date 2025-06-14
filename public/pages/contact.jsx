import { createRoot } from '/node_modules/react-dom/client';
import React from "react";
import { ArrowRight, EnvelopeSimple, Phone, MapPin } from '/node_modules/@phosphor-icons/react';

import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { Button } from './components/buttons/movingBorder';
import { BackgroundGradient } from './components/background-gradient';
import { BackgroundBeams } from './components/background-beams';

function Contact() {
    const contactMethods = [
        {
            icon: <Phone className="h-6 w-6" />,
            title: "Telefone",
            description: "+55 (11) 99999-9999",
            href: "tel:+5511999999999"
        },
        {
            icon: <EnvelopeSimple className="h-6 w-6" />,
            title: "Email",
            description: "contato@appy.com",
            href: "mailto:contato@appy.com"
        },
        {
            icon: <MapPin className="h-6 w-6" />,
            title: "Localização",
            description: "São Paulo, SP",
            href: "https://maps.google.com"
        }
    ];

    return (
        <>
            <HeaderCommon />

            <main className="relative min-h-screen">
                <div className="w-full pt-32 pb-16">
                    {/* Hero Section */}
                    <div className="mx-auto w-[80%] text-center mb-16">
                        <h1 className="text-5xl md:text-7xl font-bold bg-gradient-to-r from-[#06202B] to-[#D4C9BE] bg-clip-text text-transparent mb-6">
                            Entre em Contato
                        </h1>
                        <p className="text-gray-700 text-xl max-w-2xl mx-auto">
                            Tem alguma dúvida ou sugestão? Estamos aqui para ajudar!
                            Nossa equipe está pronta para atender você.
                        </p>
                    </div>

                    {/* Contact Methods Grid */}
                    <div className="mx-auto w-[80%] grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                        {contactMethods.map((method, index) => (
                            <BackgroundGradient key={index} className="rounded-[22px] bg-white bg-[#D4C9BE]/10 shadow-lg hover:-translate-y-[2px] hover:bg-[#D4C9BE]/5 hover:shadow-xl duration-150">
                                <a 
                                    href={method.href}
                                    target="_blank"
                                    rel="noopener noreferrer" 
                                    className="block flex flex-col items-center text-center p-4 sm:p-10"
                                >
                                    <div className="w-12 h-12 rounded-xl bg-gradient-to-r from-[#06202B] to-[#D4C9BE] flex items-center justify-center text-white mb-4">
                                        {method.icon}
                                    </div>
                                    <h3 className="text-xl font-semibold mb-2 text-[#06202B]">{method.title}</h3>
                                    <p className="text-gray-700">{method.description}</p>
                                </a>
                            </BackgroundGradient>
                        ))}
                    </div>

                    {/* Contact Form Section */}
                    <div className="mx-auto w-[80%] max-w-3xl relative">
                        <div className="absolute inset-0 h-full w-full bg-gradient-to-r from-[#06202B]/20 to-[#D4C9BE]/20 transform scale-[0.80] blur-3xl" />

                        <div className="relative bg-[#D4C9BE]/10 shadow-lg px-8 py-12 rounded-2xl shadow-xl">
                            <h2 className="text-3xl font-bold text-[#06202B] mb-8 text-center">Envie sua mensagem</h2>
                            
                            <form method='post' action="/contact" className="space-y-6">
                                <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-2">
                                            Nome
                                        </label>
                                        <input
                                            type="text"
                                            id="name"
                                            className="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                            placeholder="Seu nome"
                                        />
                                    </div>
                                    <div>
                                        <label htmlFor="email" className="block text-sm font-medium text-gray-700 mb-2">
                                            Email
                                        </label>
                                        <input
                                            type="email"
                                            id="email"
                                            className="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                            placeholder="seu@email.com"
                                        />
                                    </div>
                                </div>
                                
                                <div>
                                    <label htmlFor="subject" className="block text-sm font-medium text-gray-700 mb-2">
                                        Assunto
                                    </label>
                                    <input
                                        type="text"
                                        id="subject"
                                        className="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                        placeholder="Como podemos ajudar?"
                                    />
                                </div>
                                
                                <div>
                                    <label htmlFor="message" className="block text-sm font-medium text-gray-700 mb-2">
                                        Mensagem
                                    </label>
                                    <textarea
                                        id="message"
                                        rows={6}
                                        className="w-full px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                        placeholder="Escreva sua mensagem aqui..."
                                    />
                                </div>
                                
                                <div className="text-center">
                                    <Button
                                        borderRadius="1.75rem"
                                        className="flex gap-2 px-8 w-fit bg-transparent text-[16px] text-[#06202B] border-[#06202B] hover:bg-[#06202B]/5 transition-colors cursor-pointer"
                                    >
                                        Enviar Mensagem <ArrowRight size={24} />
                                    </Button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

            <Footer />
        </>
    );
}

const domNode = document.getElementById('main');
const root = createRoot(domNode);
root.render(<Contact />);
