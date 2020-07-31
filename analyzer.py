import matplotlib.pyplot as plt

"""
Features:
	- plot time bar graph for all languages
	- plot amount of code bar graph for all languages

"""


data = {
	"C++": 33.6,
	"Julia": 36.7,
	"JavaScript": 138.4,
	"C#": 532.3,
	"PHP": 2238.0,
	"Python": 4675.4
}




if __name__ == "__main__":
	plt.bar(*zip(*data.items()), )
	plt.title("Average time to sort")
	plt.ylabel("Time in microseconds")

	plt.show()