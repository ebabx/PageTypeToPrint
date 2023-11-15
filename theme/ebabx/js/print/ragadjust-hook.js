class ragadjustHandler extends Paged.Handler {
	constructor(chunker, polisher, caller) {
		super(chunker, polisher, caller);
	}
	beforeParsed(content) {

		// Adjusts the headers by adding a non-breaking space after
		// all the prepositions listed, and without any whitelisted
		// word.
		ragadjust('p, h1, h2, h3, h4, li', ['pronouns', 'conjunctions', 'articles', 'short_prepositions',], [], content);
	}
}

Paged.registerHandlers(ragadjustHandler);