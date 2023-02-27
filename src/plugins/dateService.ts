function getOptionDates(): Array<string>
{
  const today = new Date()
  const years    = [today.getFullYear(), today.getFullYear()-1]
  const monthes  = [today.getMonth() + 1, 12]
  const options: Array<string> = []
  for (let idx=0; idx<years.length; idx++) {
    for(let num=1; num<=monthes[idx]; num++){
      options.push(years[idx] + "年" + num + "月")
    }
  }
  return options
}
export default getOptionDates
