export type Button = {
  name: string
  replyType: string
  text?: { content: string, autoReply: string }
  template?: { templateForm: { id: number, name: string }, autoReply: string }
  url?: { link: string, autoReply: string }
  interview?: { interviewFormat: { id: number, name: string }, autoReply: string }
  tag?: { attachment: Array<string | null>, detach: Array<string | null> }
}

export type Carousel = {
  notifyMessage: string,
  title: string,
  content: string,
  image: string,
  button: Array<Button | null>
}

export type Template = {
  text: string
  carousel: Carousel
}

export type userSelect = {
  folder: string
  menuName: string
  templateType: string
  select: Template
}
