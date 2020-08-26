import matplotlib.pyplot as plt

"""
Features:
	- plot time bar graph for all languages
	- plot amount of code bar graph for all languages

"""


data = {
	"C++ \nw/ vector": 33.6,
	"C++ \nw/ array": 36.2,
	"Julia": 36.7,
	"Go": 43.6,
	"C#": 90.6,
	"JavaScript": 138.4,
	"PHP": 2238,
	"Python": 3824
}




if __name__ == "__main__":
	plt.bar(*zip(*data.items()), log=True)
	plt.title("Average time to sort")
	plt.ylabel("Time in microseconds")

	# Values above bars
	names, values = zip(*data.items())
	for i in range(len(names)):
		plt.text(i-0.4, values[i]*1.1, str(values[i]), fontdict={"size": 9})

	plt.tick_params(axis="both", labelsize="8")
	plt.margins(0.08)
	plt.show()