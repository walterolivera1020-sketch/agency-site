<section id="contact" class="py-20 lg:py-32 bg-slate-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span
                    class="reveal inline-block text-primary-600 font-semibold tracking-wider text-sm uppercase mb-4">Contact
                    Us</span>
                <h2
                    class="reveal stagger-1 font-display text-3xl sm:text-4xl lg:text-5xl font-bold text-slate-900 mb-6">
                    Get in <span class="text-gradient">Touch</span>
                </h2>
                <p class="reveal stagger-2 text-slate-600 text-lg">
                    Have questions or want to apply? Reach out to us and our team will assist you.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16">
                <!-- Left Column: Form -->
                <div class="reveal-left space-y-8">
                    <!-- Left Placeholder Card -->
                    <div class="relative rounded-2xl overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Professional recruitment consultation" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 to-slate-800/60"></div>
                        <div class="absolute inset-0 p-6 flex items-center">
                            <div>
                                <h3 class="font-display text-2xl font-bold text-white mb-2">Start Your Career Abroad
                                </h3>
                                <p class="text-slate-100">
                                    Submit your inquiry and our recruitment team will guide you through the process.
                                </p>
                            </div>
                        </div>
                    </div>

                    <form id="inquiry-form" class="bg-white rounded-2xl p-8 shadow-sm border border-slate-200">
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="firstName" class="block text-sm font-medium text-slate-700 mb-2">First
                                    Name</label>
                                <input type="text" id="firstName" name="firstName"
                                    class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700"
                                    placeholder="Juan" required>
                            </div>
                            <div>
                                <label for="lastName" class="block text-sm font-medium text-slate-700 mb-2">Last
                                    Name</label>
                                <input type="text" id="lastName" name="lastName"
                                    class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700"
                                    placeholder="Dela Cruz" required>
                            </div>
                        </div>

                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-2">Email
                                    Address</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700"
                                    placeholder="juan@example.com" required>
                            </div>
                            <div>
                                <label for="phone" class="block text-sm font-medium text-slate-700 mb-2">Phone
                                    Number</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700"
                                    placeholder="+63 912 345 6789">
                            </div>
                        </div>

                        <div class="mb-6">
                            <label for="position" class="block text-sm font-medium text-slate-700 mb-2">Position
                                Interested In</label>
                            <select id="position" name="position"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700 bg-white">
                                <option value="">Select a position...</option>
                                <option value="Nursing Specialist">Female Nursing Specialist</option>
                                <option value="Tile Worker">Tile Worker / Tile Setter</option>
                                <option value="Electrician">Building Electrician</option>
                                <option value="IT Support">IT Support Technician</option>
                                <option value="Draftsman">Architectural Draftsman</option>
                                <option value="Purchase Rep">Purchase Representative</option>
                                <option value="Other">Other / General Inquiry</option>
                            </select>
                        </div>

                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-slate-700 mb-2">Your
                                Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-2.5 border border-slate-300 rounded-lg focus:ring-2 focus:ring-primary-500 focus:border-primary-500 outline-none transition text-slate-700"
                                placeholder="Tell us about your experience and inquiries..." required></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-primary-600 hover:bg-primary-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300 shadow-md hover:shadow-lg flex items-center justify-center space-x-2">
                            <span>Send Inquiry</span>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>

                        <p id="form-status" class="text-center mt-4 text-sm hidden"></p>
                    </form>
                </div>

                <!-- Right Column: Info & Map -->
                <div class="reveal-right space-y-8">
                    <!-- Agency Image -->
                    <div class="relative rounded-2xl overflow-hidden h-48">
                        <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Modern office space" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/80 to-slate-800/60"></div>
                        <div class="absolute inset-0 p-6 flex items-center">
                            <div>
                                <h3 class="font-display text-2xl font-bold text-white mb-2">Visit Our Office</h3>
                                <p class="text-slate-100">4334 Gen. Tinio, Brgy. Bangkal, Makati City, Philippines</p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200">
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-500">Email</p>
                                    <a href="mailto:inquire@joselinemanpowercorp.com"
                                        class="text-primary-600 font-medium hover:underline break-all">inquire@joselinemanpowercorp.com</a>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-12 h-12 bg-primary-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-primary-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-500">Address</p>
                                    <p class="text-slate-900 font-medium">Makati City, Philippines</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div
                                    class="w-12 h-12 bg-accent-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-primary-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-slate-500">Office Hours</p>
                                    <p class="text-slate-900 font-medium">Mon-Fri: 8AM-5PM, Sat: 9AM-12PM</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Map Container -->
                    <div
                        class="map-container rounded-2xl overflow-hidden border border-slate-200 shadow-sm h-64 sm:h-72 lg:h-80 w-full">
                        <iframe
                            src="https://www.google.com/maps?q=4334+Gen.+Tinio,+Brgy.+Bangkal,+Makati+City,+Philippines&output=embed"
                            class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php /**PATH C:\Users\user\agency-site\resources\views/partials/contact.blade.php ENDPATH**/ ?>