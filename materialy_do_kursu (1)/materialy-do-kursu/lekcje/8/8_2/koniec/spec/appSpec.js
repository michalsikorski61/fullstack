var app = require("../app/app");

describe("Sumowanie", function() {
	it("powinno sumować 5 oraz 5", function() {
		var sum = app.add(5, 5);
		expect(sum).toEqual(10);
	});
});