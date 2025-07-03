import { createRoot } from '/node_modules/react-dom/client';
import React, { useState } from "react";
import { ArrowRight, LockSimple, EnvelopeSimple, User, GoogleLogo, WarningCircle } from '/node_modules/@phosphor-icons/react';
import axios from "/node_modules/axios";

import HeaderCommon from './components/headerCommon';
import Footer from './components/footer';
import { Button } from './components/buttons/movingBorder';
import { BackgroundGradient } from './components/background-gradient';
import { TextGenerateEffect } from './components/text-generate-effect';
import { BackgroundBeams } from './components/background-beams';

function Register() {
    const words = "Comece sua jornada para uma vida mais organizada e produtiva com o Appy.";
    const [passwordMatch, setPasswordMatch] = useState(true);
    const [resForm, setResForm] = useState({
        name: "",
        email: "",
        password: "",
        passwordConfirmed: "",
        terms: "",
        statusRegister: ""
    });

    const errors = {
        nameUndefined: "Digite a seu nome!",
        emailUndefined: "Digite seu email!",
        passUndefined: "Digite a sua senha!",
        passConfirmUndefined: "Conforme a sua senha!",
        termsUndefined: "Aceite nossos termos para se registrar!",
        userFound: "Nenhum usuário encontrado!",
    }

    const viewErrors = {
        nameUndefined: (
            <div className="mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2">
                <WarningCircle size={24} />
                <span>{errors.nameUndefined}</span>
            </div>
        ),
        emailUndefined: (
            <div className="mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2">
                <WarningCircle size={24} />
                <span>{errors.emailUndefined}</span>
            </div>
        ),
        passUndefined: (
            <div className="mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2">
                <WarningCircle size={24} />
                <span>{errors.passUndefined}</span>
            </div>
        ),
        passConfirmUndefined: (
            <div className="mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2">
                <WarningCircle size={24} />
                <span>{errors.passConfirmUndefined}</span>
            </div>
        ),
        termsUndefined: (
            <div className="mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2">
                <WarningCircle size={24} />
                <span>{errors.termsUndefined}</span>
            </div>
        ),
        userFound: (
            <div className="mt-2 text-sm text-red-600 bg-red-100/75 border border-red-300 rounded-lg px-3 py-2 flex items-center gap-2">
                <WarningCircle size={24} />
                <span>{errors.userFound}</span>
            </div>
        )
    }

    const handleForm = async (event) => {

        event.preventDefault();
        const formName = event.target.name.value;
        const formEmail = event.target.email.value;
        const formPassword = event.target.password.value;
        const formPasswordConfirmed = event.target.password_confirm.value;
        const formTerms = event.target.terms.value;

        setResForm(prev => ({
            ...prev,
            statusRegister: ""
        }))

        if (formName == "") {
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
                password: "false",
            }));
        } else {
            setResForm(prev => ({
                ...prev,
                password: "true",
            }));
        }

        if (formPasswordConfirmed == "") {
            setResForm(prev => ({
                ...prev,
                password: "false",
            }));
        } else {
            setResForm(prev => ({
                ...prev,
                password: "true",
            }));
        }

        if (formTerms == "") {
            setResForm(prev => ({
                ...prev,
                password: "false",
            }));
        } else {
            setResForm(prev => ({
                ...prev,
                password: "true",
            }));
        }

        if (
            formName == "" ||
            formEmail == "" ||
            formPassword == "" ||
            formPasswordConfirmed == "" ||
            formTerms == ""
        ) {
            return;
        }

        await axios.post("/api/register", {
            name: formName,
            email: formEmail,
            password: formPassword,
            password_confirm: formPasswordConfirmed,
            terms: formTerms
        }, {
            headers: {
            'Content-Type': 'multipart/form-data'
            }
        })
        .then(function (response) {
            response.data == false && setResForm(prev => ({
                ...prev,
                statusRegister: "false"
            }));
        })

    }

    const handlePasswordConfirm = (e) => {
        const password = document.getElementById('password').value;
        setPasswordMatch(e.target.value === password);
    };

    return (
        <>
            <HeaderCommon />

            <main className="relative min-h-screen w-full pt-32 pb-16">
                <div className="mx-auto w-full max-w-7xl relative z-10">
                    {/* Register Container */}
                    <div className="flex flex-col md:flex-row gap-8 items-center justify-center px-8">
                        {/* Left Column - Register Form */}
                        <div className="w-full md:w-1/2 max-w-md">
                            <div className="relative">
                                <div className="absolute inset-0 h-full w-full bg-gradient-to-r from-[#06202B]/20 to-[#D4C9BE]/20 transform scale-[0.80] blur-3xl" />
                                <div className="relative bg-[#D4C9BE]/10 px-8 py-12 rounded-2xl shadow-xl">
                                    <h2 className="text-3xl font-bold text-[#06202B] mb-8 text-center">Criar Conta</h2>
                                    
                                    {/* Social Register */}
                                    <div className="mb-8">
                                        <button className="w-full flex items-center justify-center gap-2 bg-white text-[#06202B] border-2 border-[#06202B] rounded-lg cursor-pointer px-4 py-3 font-medium hover:bg-[#06202B] hover:text-white transition-colors">
                                            <GoogleLogo size={24} />
                                            Cadastrar com Google
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

                                    {/* Register Form */}
                                    <form onSubmit={(event) => {handleForm(event)}} className="space-y-6">
                                        {resForm.statusRegister == "false" && viewErrors["userFound"]}

                                        <div>
                                            <label htmlFor="name" className="block text-sm font-medium text-gray-700 mb-2">
                                                Nome Completo
                                            </label>
                                            <div className="relative">
                                                <div className="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <User className="h-5 w-5 text-gray-400" />
                                                </div>
                                                <input
                                                    type="text"
                                                    id="name"
                                                    name="name"
                                                    required
                                                    className="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                                    placeholder="Seu nome completo"
                                                />
                                            </div>
                                            {resForm.name == "false" && viewErrors["nameUndefined"]}
                                        </div>

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
                                                    name="email"
                                                    required
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
                                                    name="password"
                                                    required
                                                    className="w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border border-gray-300 focus:ring-2 focus:ring-[#06202B] focus:border-transparent"
                                                    placeholder="Mínimo 8 caracteres"
                                                    minLength={8}
                                                />
                                            </div>
                                        </div>

                                        <div>
                                            <label htmlFor="password_confirm" className="block text-sm font-medium text-gray-700 mb-2">
                                                Confirmar Senha
                                            </label>
                                            <div className="relative">
                                                <div className="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                    <LockSimple className="h-5 w-5 text-gray-400" />
                                                </div>
                                                <input
                                                    type="password"
                                                    id="password_confirm"
                                                    required
                                                    className={`w-full pl-10 px-4 py-3 rounded-lg bg-gray-50 border focus:ring-2 focus:ring-[#06202B] focus:border-transparent ${
                                                        passwordMatch ? 'border-gray-300' : 'border-red-500'
                                                    }`}
                                                    placeholder="Digite a senha novamente"
                                                    onChange={handlePasswordConfirm}
                                                    minLength={8}
                                                />
                                            </div>
                                            {!passwordMatch && (
                                                <p className="mt-1 text-sm text-red-500">As senhas não coincidem</p>
                                            )}
                                        </div>

                                        <div className="flex items-center">
                                            <input
                                                id="terms"
                                                type="checkbox"
                                                required
                                                className="h-4 w-4 text-[#06202B] focus:ring-[#06202B] cursor-pointer border-gray-300 rounded"
                                            />
                                            <label htmlFor="terms" className="ml-2 block text-sm text-gray-700">
                                                Eu concordo com os{' '}
                                                <a href="/terms" className="text-[#06202B] hover:underline">
                                                    Termos de Uso
                                                </a>{' '}
                                                e{' '}
                                                <a href="/privacy" className="text-[#06202B] hover:underline">
                                                    Política de Privacidade
                                                </a>
                                            </label>
                                        </div>
                                        
                                        <div>
                                            <Button
                                                borderRadius="0.75rem"
                                                className="w-full flex gap-2 justify-center bg-[#06202B] text-[16px] text-white border-[#06202B] hover:bg-[#06202B]/90 transition-colors cursor-pointer"
                                            >
                                                Criar Conta <ArrowRight size={24} />
                                            </Button>
                                        </div>
                                    </form>

                                    <p className="mt-6 text-center text-sm text-gray-600">
                                        Já tem uma conta?{' '}
                                        <a href="/login" className="text-[#06202B] font-medium">
                                            Fazer login
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        {/* Right Column - Welcome Message */}
                        <div className="w-full md:w-1/2 max-w-md">
                            <div className="mb-8">
                                <TextGenerateEffect words={words} className="text-2xl font-semibold text-[#06202B]" />
                            </div>

                            {/* Features List */}
                            <div className="mt-8 space-y-4">
                                <h3 className="text-xl font-semibold text-[#06202B] mb-4">Com o Appy você pode:</h3>
                                {[
                                    "Organizar suas tarefas de forma inteligente",
                                    "Acompanhar seu progresso diário",
                                    "Sincronizar seus compromissos",
                                    "Personalizar sua experiência"
                                ].map((feature, index) => (
                                    <div key={index} className="flex items-center gap-2 text-gray-700">
                                        <div className="w-1.5 h-1.5 rounded-full bg-[#06202B]" />
                                        {feature}
                                    </div>
                                ))}
                            </div>

                            <BackgroundGradient className="rounded-[22px] p-4 sm:p-10">
                                <img
                                    src="/images/prancheta.png"
                                    alt="Register Illustration"
                                    className="w-full h-auto rounded-lg"
                                />
                            </BackgroundGradient>
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
root.render(<Register />);
