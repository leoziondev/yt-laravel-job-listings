<x-layouts.app>
    <x-ui.container>
        <div class="flex flex-col md:flex-row md:space-x-6">
            <div class="w-full md:w-4/12">
                <x-ui.card>
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="{{ asset('images/no-image.png') }}"
                            alt=""
                        />

                        <div class="text-md text-gray-600 font-bold mb-4">{{ $listing->company }}</div>

                        <x-listing.tags :tagsCsv="$listing->tags" />

                        <div class="text-base text-gray-600 my-4">
                            <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
                        </div>

                        <div class="flex flex-col space-y-2 w-full">
                            <a
                                href="mailto:test@test.com"
                                class="block bg-brand-500 text-white mt-6 py-2 px-4 rounded-md hover:opacity-80"
                                ><i class="fa-solid fa-envelope"></i>
                                Contact Employer</a
                            >

                            <a
                                href="https://test.com"
                                target="_blank"
                                class="block bg-gray-800 text-white py-2 px-4 rounded-md hover:opacity-80"
                                ><i class="fa-solid fa-globe"></i> Visit
                                Website</a
                            >
                        </div>
                    </div>
                </x-ui.card>
            </div>
            <div class="w-full md:w-8/12 mt-6 md:mt-0">
                <x-ui.card>
                    <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $listing->title }}</h1>

                    <div class="text-gray-500 lg:px-4">
                        {{-- {{ $listing->description }} --}}
                        <div class="prose lg:prose-md max-w-none"><p class="text-gray-900">
                            <strong>This job posting is now closed, but we've left it online for anyone who'd like to reference it. Thanks to all who applied!</strong>
                          </p>

                          <p>We're the tiny team behind open-source projects like <a href="https://tailwindcss.com">Tailwind CSS</a>, commercial products like <a href="https://tailwindui.com">Tailwind UI</a>, and the book <a href="https://refactoringui.com/book">Refactoring UI</a>. We're hiring another programmer to help us build more awesome UI tools for developers.</p>

                          <blockquote>
                            <p>Why is Tailwind removing the default styles on my <code>h1</code> elements? How do I disable this? What do you mean I lose all the other base styles too?</p>
                          </blockquote>

                          <h2 id="about-the-job">About the job</h2>
                          <p>We're looking for someone to work closely with <a href="https://twitter.com/adamwathan">Adam</a> <em>(that's me, the guy who created Tailwind CSS!)</em> to help shape and build the future of our tools and products.</p>
                          <p>You'd spend your time developing and improving existing projects, for example:</p>
                          <ul>
                          <li>Building new component and page examples <a href="https://twitter.com/steveschoger">Steve</a> designs for Tailwind UI</li>
                          <li>Implementing a componentization strategy for our Tailwind UI templates to extract repeated patterns and make our existing components easier to maintain and faster to develop</li>
                          <li>Building a system for exporting and synchronizing our Tailwind UI component markup with separate Git repositories that we give customers access to</li>
                          <li>Adding support for self-service upgrades to the Tailwind UI app</li>
                          </ul>
                          <p>...as well as contributing directly at the product strategy and creative level to new projects, such as:</p>
                          <ul>
                          <li>Designing and developing official React and Vue libraries using Tailwind UI components</li>
                          <li>Planning and developing a new Tailwind UI Ecommerce package</li>
                          <li>Building a live interactive demo application using Tailwind UI to help potential customers see what's possible</li>
                          <li>Adding support for multiple themes to Tailwind UI</li>
                          </ul>
                          <p>We'd also do a ton of open-source work together, like:</p>
                          <ul>
                          <li>Working on new Tailwind CSS features like dark mode support or animation utilities</li>
                          <li>Designing and building a typography plugin for Tailwind that makes it easy to style Markdown content</li>
                          <li>Prototyping and evaluating the potential for a CSS-in-JS version of Tailwind</li>
                          </ul>
                          <p>You and I would spend a lot of time pair programming, brainstorming on hard problems, prototyping different ideas, throwing them away, and prototyping them again. You wouldn't be just churning through tickets in a backlog — you'd be helping to design entirely new products, figuring out what exactly we're even building and why.</p>
                          <p>We're only three people <em>(you'd be number four)</em> which means that even though we each have our areas of expertise, we all wear many hats. We're looking for a programmer, but you'd also help out with things like:</p>
                          <ul>
                          <li>Managing GitHub issues and fixing bugs</li>
                          <li>Writing and improving the documentation for the tools we make</li>
                          <li>Answering customer support questions</li>
                          <li>Troubleshooting problems for users in places like Twitter and Discord</li>
                          </ul>
                          <p>If you've ever maintained an open-source project, working with us carries a lot of the same responsibilities. The difference is we all get paid for it and don't have to squeeze in all our work on evenings and weekends.</p>
                          <p>Here are a few recent projects you might have worked on if you were already part of the team:</p>
                          <figure>
                            <img src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="">
                            <figcaption>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</figcaption>
                          </figure>
                          <table>
                            <thead>
                              <tr>
                                <th>Wrestler</th>
                                <th>Origin</th>
                                <th>Finisher</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Bret "The Hitman" Hart</td>
                                <td>Calgary, AB</td>
                                <td>Sharpshooter</td>
                              </tr>
                              <tr>
                                <td>Stone Cold Steve Austin</td>
                                <td>Austin, TX</td>
                                <td>Stone Cold Stunner</td>
                              </tr>
                              <tr>
                                <td>Randy Savage</td>
                                <td>Sarasota, FL</td>
                                <td>Elbow Drop</td>
                              </tr>
                              <tr>
                                <td>Vader</td>
                                <td>Boulder, CO</td>
                                <td>Vader Bomb</td>
                              </tr>
                              <tr>
                                <td>Razor Ramon</td>
                                <td>Chuluota, FL</td>
                                <td>Razor's Edge</td>
                              </tr>
                            </tbody>
                          </table>
                          <ul>
                          <li>Building the first batch of <a href="https://tailwindui.com/components/marketing/elements/headers">Marketing Header components</a> for Tailwind UI using Tailwind CSS, vanilla HTML, and a little bit of Alpine.js for the interactive demos</li>
                          <li>Building a <a href="https://gist.github.com/adamwathan/e0a791aa0419098a7ece70028b2e641e">Transition component in React</a> that lets Tailwind UI customers easily style enter/leave transitions with Tailwind utilities</li>
                          <li>Refactoring the actual Tailwind UI application <em>(a Laravel app)</em> to read component data from an isolated SQLite database instead of from the same database that holds customer information, to simplify and speed up deployments without any down-time</li>
                          </ul>
                          <h2 id="about-you">About you</h2>
                          <p>We're looking for someone with very strong front-end skills who is an expert in a modern component framework like React or Vue, with experience in a back-end framework like Laravel being a big plus. More important than specific technical skills though is that you're a strong problem solver who loves to learn — we're not experts in everything and we don't expect you to be either.</p>
                          <pre><code class="language-html">&lt;article class="prose"&gt;
  &lt;h1&gt;Garlic bread with cheese: What the science tells us&lt;/h1&gt;
  &lt;p&gt;
    For years parents have espoused the health benefits of eating garlic bread with cheese to their
    children, with the food earning such an iconic status in our culture that kids will often dress
    up as warm, cheesy loaf for Halloween.
  &lt;/p&gt;
  &lt;p&gt;
    But a recent study shows that the celebrated appetizer may be linked to a series of rabies cases
    springing up around the country.
  &lt;/p&gt;
  &lt;!-- ... --&gt;
&lt;/article&gt;
</code></pre>
                          <p>You might not call yourself a designer, but you know great UI design when you see it and you know when something isn't up to par. Details matter to you, and if the text in a button is off-center by a pixel you will go to the end of the earth to figure out why.</p>
                          <p>We don't care if you went to school <em>(I dropped out of both university and college!)</em>, we just care about what you can do and how you do it. We're all just makers and tinkerers, so as long as you love to build awesome stuff you'll fit right in.</p>
                          <p>Here are some of the technologies we work with day-to-day right now:</p>
                          <ul>
                          <li>Tailwind CSS itself is written in modern JavaScript <em>(and targets Node.js, not the browser)</em>, and tested with Jest</li>
                          <li>The Tailwind UI web application is a traditional server-rendered Laravel 7 application, enhanced with a little bit of <a href="https://github.com/alpinejs/alpine">Alpine.js</a></li>
                          <li>Tailwind UI components are authored in plain HTML + Alpine <em>(but we'd love your help migrating to a more maintainable approach)</em></li>
                          <li>The Tailwind documentation website is currently built with <a href="https://jigsaw.tighten.co/">Jigsaw</a> <em>(a Laravel-based static site generator)</em> and <a href="https://vuejs.org/">Vue.js</a>, but we are planning to rebuild it with <a href="https://nextjs.org/">Next.js</a> and <a href="https://github.com/mdx-js/mdx">MDX</a> in the coming months</li>
                          </ul>
                          <p>One of the biggest projects we're going to be tackling later this year is developing official Tailwind UI React and Vue libraries, so long term we will be doing a lot more complex front-end JavaScript work than we do right now.</p>
                          <p>Some of the challenges that we expect to face on that project include:</p>
                          <ul>
                          <li>Designing user-facing APIs for these libraries that are extremely flexible and powerful, but also easy to get started with</li>
                          <li>Coming up with an approach that supports multiple color palette options, while still being PurgeCSS-friendly</li>
                          <li>Building the interactive components <em>(dropdowns, modals, etc.)</em> with all accessibility best practices in mind, including correct use of ARIA attributes, proper keyboard navigation, and handling complex issues like focus trapping</li>
                          </ul>
                          <h2 id="pay-and-benefits">Pay and benefits</h2>
                          <p>This is a fully remote, full-time <em>(40 hour per week)</em> position, and you can choose your own hours. All we ask is that you plan to overlap around ~4 hours per day with 8am-5pm EST because I am sick of always programming by myself.</p>
                          <p>The salary for this position is between $115,000 — $135,000 USD <em>(or $160,000 – $195,000 CAD)</em> based on experience, paid in your local currency. We'll do the currency conversion when you're hired and deal with any exchange fluctuation on our side.</p>
                          <p>The position includes 4 weeks <em>(20 days)</em> of paid time off, plus 10 additional days for local national holidays. You're also free to take additional time off here and there as needed for any reasonable reason, like of course if you are sick, but also if you need the morning off to take your pet to the vet, or need an afternoon off to drive a loved one to the airport, whatever. At the end of the day all that matters to us is that we're making progress on what we're building together — we're not interested in tracking time.</p>
                          <p>We are committed to working at a sustainable and healthy pace, and we believe 6-8 hours is more than enough time to get a solid day's work done.</p>
                          <p>We will buy you any equipment you need to do your best work, including a computer, external display, office chair — whatever you need. If you need to rent a desk at a co-working space, we'll pay for that as well.</p>
                          <p>We're a Canadian company, so the position is permanent/full-time in spirit but a contract role on paper since we can't actually hire anyone outside of Canada as a traditional employee. That means it does not include certain benefits like health insurance or a retirement plan, so we've tried to account for that in the compensation.</p>
                          <h2 id="how-to-apply">How to apply</h2>
                          <p>To apply, write something specifically for this position that tells us why we're a great fit for each other, and what you see the future being like if we work together. Tell us what you're excited about in the industry these days, and what you're betting on for the future. Is there a project or feature you'd love for us to build together? Tell us about that too!</p>
                          <p>We don't ask for your resume but that doesn't mean we're not interested in what you've worked on in the past, we're just leaving it up to you to tell your own story the way you want to tell it.</p>
                          <p>We understand that not everyone has the same amount of time to dedicate to their application <em>(I work from home with a two year old!)</em>, so don't feel like you need to spend 10 hours on it to stand out. As long as you sound like someone who could be a great fit when we're actually working together day-to-day with the same time constraints, we really want to meet you.</p>
                          <p>Give us a link to whatever you put together in the "Your application" field when applying.</p>
                          <p>We're accepting applications until May 27, 2020 at 10pm EST. There are no bonuses or penalties for submitting early or close to the deadline, so submit your application whenever works best for your own schedule. We're planning to start interviews early June, and aiming for a start date of mid July.</p>
                          <p>Can't wait to hear from you!</p>
                          </div>
                    </div>
                </x-ui.card>
            </div>
        </div>
    </x-ui.container>
</x-layouts.app>
