def print_interval(number):
    start = 1
    interval = range(start, number + 1)
    return ', '.join(map(str, interval))


def handler(d, e):
    return print_interval(d.get('max'))